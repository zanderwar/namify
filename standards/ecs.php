<?php declare(strict_types=1);

use AdamWojs\PhpCsFixerPhpdocForceFQCN\Fixer\Phpdoc\ForceFQCNFixer;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer as SingleTraitPerLine;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer;
use PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer;
use PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationBracesFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer;
use PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    // any files we don't want to run standards on
    $ecsConfig->skip([
        // skip this file as its more readable
        __DIR__ . '/../app/IO/Custom/ErrorRef.php',
        __DIR__ . '/../app/IO/Custom/DBSanitizer.php',
        __DIR__ . '/../config/*',
        PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class,
    ]);

    $ecsConfig->sets([SetList::CLEAN_CODE, SetList::PSR_12]);

    // standalone rules
    $ecsConfig->rule(TrimArraySpacesFixer::class);
    $ecsConfig->rule(ArrayIndentationFixer::class);
    $ecsConfig->rule(NoUselessElseFixer::class);
    $ecsConfig->rule(NoSuperfluousElseifFixer::class);
    $ecsConfig->rule(SingleQuoteFixer::class);
    $ecsConfig->ruleWithConfiguration(ArraySyntaxFixer::class, ['syntax' => 'short']);
    $ecsConfig->ruleWithConfiguration(MultilineWhitespaceBeforeSemicolonsFixer::class, ['strategy' => 'no_multi_line']);
    $ecsConfig->ruleWithConfiguration(EchoTagSyntaxFixer::class, ['format' => 'long']);
    $ecsConfig->rule(NotOperatorWithSuccessorSpaceFixer::class);
    $ecsConfig->ruleWithConfiguration(VisibilityRequiredFixer::class, ['elements' => ['const']]);
    $ecsConfig->ruleWithConfiguration(ConcatSpaceFixer::class, ['spacing' => 'none']);
    $ecsConfig->rule(NoTrailingWhitespaceInCommentFixer::class);
    $ecsConfig->rule(DoctrineAnnotationSpacesFixer::class);
    $ecsConfig->rule(DoctrineAnnotationIndentationFixer::class);
    $ecsConfig->rule(DoctrineAnnotationBracesFixer::class);
    $ecsConfig->rule(SingleQuoteFixer::class);
    $ecsConfig->ruleWithConfiguration(BlankLineBeforeStatementFixer::class, ['statements' => ['if']]);
    $ecsConfig->ruleWithConfiguration(ReturnTypeDeclarationFixer::class, ['space_before' => 'one']);
    $ecsConfig->rule(CastSpacesFixer::class);
    $ecsConfig->rule(SingleTraitPerLine::class);
    $ecsConfig->rule(NoUnreachableDefaultArgumentValueFixer::class);
    $ecsConfig->rule(ClassAttributesSeparationFixer::class);
    $ecsConfig->ruleWithConfiguration(
        GlobalNamespaceImportFixer::class,
        ['import_classes' => false, 'import_constants' => false, 'import_functions' => false]
    );
    $ecsConfig->rule(FullyQualifiedStrictTypesFixer::class);
    $ecsConfig->rule(ForceFQCNFixer::class);
};

# Namify

A simple funny name generator that can be used in lieu of a missing username or display name.

# Installation

```console
composer install zanderwar/namify
```

# Usage

Generate a random name:

```php
use Zanderwar\Namify\Namify;

$name = Namify::generate(); // FunnyZebra
```

Generate multiple unique names:

```php
use Zanderwar\Namify\Namify;

for ($i = 0; $i < 10; $i++) {
    $name = Namify::generate(unique: true); // FunnyZebra, CutePanda, SmellyTiger, etc.
}
```

Generate a name that does not exceed a specific length:

```php
use Zanderwar\Namify\Namify;

$name = Namify::generate(maxLength: 20); // FunnyZebra
```

# Examples

Over 725,000 unique names can be generated, here is a peak at a few:

```
HelplessTurtle
OvercookedChickadee
PointedKite
DeafeningStork
SpanishMagpie
DistantHumpbackWhale
DimwittedEel
TragicShark
RichMouse
PungentParakeet
ShamelessFerret
CrookedBat
StingyTakin
DualCicada
RoastedGoldfish
RosyUnicorn
FearlessBat
WiseWolverine
BurdensomePorcupine
MotionlessClownfish
AustereIrukandjiJellyfish
ThoseQuokka
NeatDog
DentalSeahorse
VacantBlueJay
FragrantPony
CornyLandSnail
ShockedOrca
FumblingLaboratoryRatStrains
KaleidoscopicFlamingo
MatureParrotfish
ShamefulFly
WhisperedSugarGlider
SweetMink
GrotesqueBoxJellyfish
PinkGoose
WeakShrimp
HandyStarnosedMole
HardToFindImpala
ScornfulBlueJay
BaggyStarnosedMole
DarlingMonkey
AnchoredHorse
SuddenMarlin
DarkCobra
WideRainbowTrout
MessyEel
DefiantDonkey
DopeyBuffalo
SleepyFlamingo
GlaringDog
FirsthandDormouse
PiercingBactrianCamel
WavyGrouse
VainSparrow
WobblyCarp
HandmadePrayingMantis
AwfulBarnacle
LongCatshark
PassionateDragon
GlumAnt
PrimeRabbit
MammothFancyMouse
VisibleGroundShark
WickedQuokka
KeenCoyote
FussyBadger
JollyVampireSquid
TatteredHare
DeliciousGiraffe
TrustingTiglon
CriticalSockeyeSalmon
PeriodicLion
AgedHarrier
DampRightWhale
AdolescentLion
```

# License

MIT License

Copyright (c) 2022 zanderwar

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

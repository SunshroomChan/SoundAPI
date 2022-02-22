# SoundAPI
A API which it making sound easily and simple!
### How to use this plugin?
Simplified coding as easier on your plugin that you are develop it!
## API 
### Add sound/Stop sound on your plugin
First of all, to add your sound, you need to import SoundAPI class like this:
```php
use SunshroomChan/SoundAPI/SoundAPI;
```
- **Add sound**<br>
To add custom sound so you just doing this:
```php
SoundAPI::getInstance()->addSound($player, 'what sound if you want', $pitch = random nunber, $volume);
```
Example:
```php
SoundAPI::getInstance()->addSound($player, 'note.hat' <= this sound you can get it on internet, 1 <= this number is sound pitch, 4 <==== this number is volume of the sound);
```
- **Stop sound**<br>
If you want to stop sound, just easily doing this:
```php
SoundAPI::getInstance()->stopSound($player, 'same as add sound', true(false) <= it use for stop all sound);
```

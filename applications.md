## Ubuntu Restricted Extras
> sudo apt-get install ubuntu-restricted-extras

## Chromium
> sudo apt-get install chromium-browser

### Settings:

- Show advanced settings...
- Web content
- Page zoom: 110%

### Flash player
> sudo apt-get install pepperflashplugin-nonfree
>
> sudo update-pepperflashplugin-nonfree --install

### Extensions
- [Adblock Plus](https://chrome.google.com/webstore/detail/adblock-plus/cfhdojbkjhnklbpkdaibdccddilifddb)
- [Better History](https://chrome.google.com/webstore/detail/better-history/obciceimmggglbmelaidpjlmodcebijb)
- [Awesome Screenshot](https://chrome.google.com/webstore/detail/awesome-screenshot-screen/nlipoenfbbikpbjkfpfillcgkoblgpmj)
- [RSS Feed Reader](https://chrome.google.com/webstore/detail/rss-feed-reader/pnjaodmkngahhkoihejjehlcdlnohgmp)
- [The Great Suspender](https://chrome.google.com/webstore/detail/the-great-suspender/klbibkeccnjlkjkiokjodocebajanakg)

### Profile-sync-daemon
[Profile-sync-daemon](https://github.com/graysky2/profile-sync-daemon) is a pseudo-daemon manages browser's profile in
tmpfs and periodically syncs it back to the physical disc.

> sudo add-apt-repository ppa:graysky/utils
>
> sudo apt-get update
>
> sudo apt-get install profile-sync-daemon

- Stop psd on old computer if it is installed and running.
- Copy chromium profile folder '.config/chromium' from old computer.
- Initiate psd:

> psd

- Configure psd:

> [~/.config/psd/psd.conf](home/user/.config/psd/psd.conf)

- Start psd:

> systemctl --user start psd

## Microsoft Fonts
> sudo apt-get install ttf-mscorefonts-installer

## TLP
> sudo apt-get install tlp tlp-rdw tp-smapi-dkms acpi-call-dkms

Configuration:
> [/etc/default/tlp](etc/default/tlp)

> sudo systemctl start tlp

## Telegram
> https://desktop.telegram.org/

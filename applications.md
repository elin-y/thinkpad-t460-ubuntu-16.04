## Chromium
> sudo apt-get install chromium-browser

### Settings:

- Show advanced settings...
- Web content
- Page zoom: 110%

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

## Evolution Exchange Web Services plugin
> sudo apt-get install evolution-ews

## Microsoft Fonts
> sudo apt-get install ttf-mscorefonts-installer

## Terminator
Better terminal application.
> sudo apt-get install terminator

@todo Terminator config

## Guake
> sudo apt-get install guake

## Openvpn
> sudo apt-get install openvpn network-manager-openvpn network-manager-openvpn-gnome
>
> sudo systemctl restart networking

## TLP
> sudo apt-get install tlp tlp-rdw tp-smapi-dkms acpi-call-dkms

Configuration:
> [/etc/default/tlp](etc/default/tlp)

> sudo systemctl start tlp

## Chromium
> sudo apt-get install chromium-browser

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

#### Settings:
> chrome://settings
- Show advanced settings...
- Web content
- Page zoom: 110%

## Terminator
Better terminal application.
> sudo apt-get install terminator

@todo Terminator config

## Guake
> sudo apt-get install guake

## Git
> sudo apt-get install git

### Generate SSH key
Don't use your old ssh key on your new machine, generate a new one.

> ssh-keygen -t -rsa -b 4096 -C "email@example.com"

Add your public key into your servers' and old computer's known_hosts files.
> ssh-copy-id -i user@hostname
>
> sudo service networking restart

## Openvpn
> sudo apt-get install openvpn network-manager-openvpn network-manager-openvpn-gnome

## Sublime Text
Download the latest build (.deb file) and install.

Sync settings and packages from old computer
> rsync -av --progress user@hostname:.config/sublime-text-3/Packages/User/ ~/.config/sublime-text-3/Packages/User
>
> rsync -av --progress user@hostname:.config/sublime-text-3/Installed\\\ Packages/ ~/.config/sublime-text-3/Installed\ Packages/

## PhpStorm (and Java)
> sudo add-apt-repository ppa:webupd8team/java
>
> sudo apt-get update
>
> sudo apt-get install oracle-java8-installer

## TLP
> sudo apt-get install tlp tlp-rdw tp-smapi-dkms acpi-call-dkms
>
> sudoedit /etc/default/tlp
```
CPU_SCALING_GOVERNOR_ON_AC=performance
CPU_SCALING_GOVERNOR_ON_BAT=ondemand
CPU_BOOST_ON_AC=1
DISK_IOSCHED="deadline cfq"
PCIE_ASPM_ON_BAT=default
WIFI_PWR_ON_BAT=1
RESTORE_DEVICE_STATE_ON_STARTUP=1
```
> sudo tlp start

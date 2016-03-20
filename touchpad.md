# Touchpad tweaks
I find it hard to use touchpad in conventional way. So one of the first things I setup is to inverse the scrolling
direction, which is called "natural scrolling". I also disable two finger horizontal scrolling, since it annoys me.

Opend dconf editor and  uncheck 'active' checkbox under:

> org/gnome/settings-daemon/plugins

Create the following config file for synaptics touchpad:
> [/etc/X11/xorg.conf.d/50-synaptics.conf](etc/X11/xorg.conf.d/50-synaptics.conf)

dconf editor
> org/gnome/settings-daemon/plugins/

You need to reboot or enter the following command to get this setting active:
> synclient VertScrollDelta=-111
> synclient HorizTwoFingerScroll=0

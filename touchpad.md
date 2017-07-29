# ThinkPad T460 Ubuntu GNOME 16.04
## Touchpad tweaks
I find it hard to use the touchpad in the conventional way. So one of the first things I do is to inverse the scrolling
direction, which is also called "natural scrolling". I also disable two finger horizontal scrolling, since it annoys me.
Moreover, the touchpad is very sensitive and it makes sense to enable the palm detection to prevent unintended clicks.

Open dconf editor and  uncheck 'active' checkbox under:

> org/gnome/settings-daemon/plugins

Create the following config file for synaptics touchpad:
> [/etc/X11/xorg.conf.d/50-synaptics.conf](etc/X11/xorg.conf.d/50-synaptics.conf)

You need to reboot or enter the following commands to get this setting active:

```
synclient VertScrollDelta=-111
synclient HorizTwoFingerScroll=0
synclient VertEdgeScroll=0
synclient PalmDetect=1
synclient PalmMinWidth=5
synclient PalmMinWidth=80
synclient FingerLow=10
synclient CoastingSpeed=10
```

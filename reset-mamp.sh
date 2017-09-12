#!/bin/sh
# Reset MAMP PRO 4 Trial
# Let me know if it works
set -e
rm ~/Library/Preferences/de.appsolute.mamppro.plist
rm -rf ~/Library/Caches/de.appsolute.mamppro
rm -rf ~/Library/Saved\ Application\ State/de.appsolute.mamppro.savedState 
killall cfprefsd

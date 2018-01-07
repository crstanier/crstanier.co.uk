/*
Title: How to install Stainless Steel mod with the steam version of Medieval Total War 2 on macOS / OS X 
Date: 2016/12/04
Description: A walkthough on getting the fantastic Stainless Steel 6.4 mod to work for the Steam / macOS version of Medieval Total War 2
Summary: Recently, during my move to Berlin I had some downtime and discovered, to my join, Medieval 2 was available for Mac through the Steam Store (thanks Paradox!). Much to my girlfriend's dismay I got back into playing it but was inkling to be able to use the Stainless Steel mod again too. Medieval 2 for Mac from Steam doesn't have a workshop to add the mod to the game simply - however, it is possible. It took a bit of digging around and noticed on other forums people had similar questions so I thought I'd consolidate the steps here incase anyone is looking to do similar in the future.
Author: Journal
*/

One of my favourite games from childhood was the Medieval 2: Total War. I played countless hours of the original game and expansion packs. Expanding, growing, conquering and assimilating. I loved balancing my economy to support the troop stacks and changing the composition of my armies to counter the specialist units of whichever nation was attacking me (I'm looking at you Milan..)

The game took on a whole new lease of life when I discovered the Stainless Steal Mod. For me, it added new depths, aspects and challenges that I had wrung out of the original version of the game after many years of playing.

First of all - a disclaimer - I am not responsible for anything you break following the steps below although there isn't anything particularly worrying.

I'm assuming you've already installed [Medieval 2 for Mac via Steam](http://store.steampowered.com/sub/460/). I believe the Kingdoms expansion is required for Stainless Steel. 

 1. Download of a copy of Stainless Steel 6.3 and the 6.4 patch. You can find links to them on [twcentre](http://www.twcenter.net/forums/showthread.php?417435-Stainless-Steel-6-4-Released!). I used the torrent version - there were plenty of seeders.
 2. Whilst Stainless Steel is downloading you're going to need to grab a copy of [Wineskin](http://wineskin.urgesoftware.com/tiki-index.php?page=Downloads). Wineskin allows you to run Windows applications on a Mac. We're going to use it to run the Stainless Steal installers.
 3. Once Wineskin has downloaded open the app. Click the + Icon to install a new engine. I simply picked the latest one available.
 4. Once the engine has installed click, 'Create Blank Wrapper'. Give your Wineskin app a name (mine was StainlessSteel.app).
 5. It *may* as you about installing packages. I installed the .NET package but not the following one. You'll eventually get a notice saying it has finished. Select **View wrapper in Finder**
 6. In the Finder right click on your wrapper and go to **Show package contents**
 7. You should see 3 items: Contents, drive_c (this is an alias) and Wineskin.app. Double click on the **Wineskin.app** 
 8. Click **Install Software**
 9. Click **Choose Setup Executable** and find the .exe for the Stainless Steel 6.3 installer.
 10. Follow the steps through using the defaults (it doesn't matter that the location doesn't really have Medieval 2 installed there).
 11. At the end of the installation it will ask you to setup Stainless Steel. I enjoy the Late Era campaign and use the 3rd AI choice (you will get another chance to change this later).
 12. If you're asked by Wineskin which executable you would like to use, select **launcher.exe**
 13. Once you've finished installing 6.3 repeat step 8, 9 and 10 for the 6.4 installer your downloaded. After I completed this I got the SS Config menu again - this time it gives a description of the options so pick what is right for you.
 14. Keep your Finder window open but switch over to Steam. Right click on **Medieval 2: Total War** and go to **Properties**. 
 15. Click on the **Local Files** tab and then press **Browse Local Files**. Navigate down the tree to`Medieval2Data/mods`.
 16. In your other finder Window (where you saw the 3 items in Step 7), copy the whole directory **SS6.3** and paste it into the Steam location from Step 15.
 17. Launch Medieval 2 from Steam. You'll be treated with the Options Dialogue box. Click **Advanced** on the right. Check the *Advanced Options* box and type in `--features.mod=mods/SS6.3`. The SS6.3 should match the directory name exactly. If you've left it as the default - the above will work.
 18. Click Play and enjoy!

Let me know how you get on. If you have any troubles just drop me a mail and I'll do what I can to help!

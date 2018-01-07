/*
Title: How to fix the Amazon Alexa - "I can't find songs by ... on spotify"
Date: 2017/12/09
Description: Steps to fix Amazon Alexa when it responds, "I can't find songs by ... on spotify" when requesting artists or albums
Summary: I recently bought an Amazon Echo. The initial setup went well and I had it setup to use Spotify for my music. After a few weeks I discovered Alexa could not longer find songs when I requested them by the artist, song or the album (requesting a playlist worked fine). After some digging and trial and error I found the problem was related to the country in my Amazon account. This article (hopefully) provides you with the steps to fix it!
Author: Journal
*/

I recently discovered a problem with Alexa on my Amazon Echo. Having worked perfectly in the several weeks since I bought it, Alexa stopped being able to play songs when requesting them by artist, album or genre but playlists were unaffected. Whenever I asked variants, "Alexa, play songs by the Beatles", the response was "I can't find songs by the Beatles". Eventually, I discovered this was because I had very mixed up region settings but the fix was simply (albeit cumbersome). I decided to share the steps in hopes it helps otthers.

First, a bit of context. I had an Amazon.co.uk account for approximately a decade before I moved to Berlin. I bought both my Echos via Amazon.de and their location is currently set to Germany (to make the most of the weather). The language of both my devices is English. I imagine somewhere in the above is where I managed to cause this mess.

A few basic troubleshooting tips I would recommend before doing this. You should make sure the Spotify is your default music provider and attempt to unlink and relink your account. The steps to do this are provided on the [Spotify Website](https://support.spotify.com/us/article/alexa/).

A bit of a disclaimer - I am not official Amazon or Spotify support. These are the steps I followed to get my devices working again. I don't know enough about how Amazon is working internally to know the true root cause about why this is an issue (or even if this is the best fix) - I can just tell you it worked for me and share the steps.

## Fix the Country of your Account
1. Access your Amazon account. For this I used Amazon.co.uk but you should pick the site appropriate to your account.
2. Click 'Your Account' in the bar. It should be just right of the centre.
3. From the dropdown, click 'Manage your Content and Devices'
4. On the new page, click 'Settings'. It should be the tab on the right.
5. Scroll down to 'Country Settings' Mine was set to Germany and I updated to the United Kingdom. [Note, if you access via the wrong Amazon site (e.g. DE), it does not let you change the country to another!]
6. Click Save

## Update your Amazon Echo(s) to use the new settings
You now need to reregister your Echos so they take the new settings. To do this:
1. Access alexa.amazon.co.uk (or the site you need to use)
2. Click Settings
3. Select your Echo from the list at the top
4. Scroll down to 'About' and click 'Deregister'
5. Click 'Deregister' in the confirmation dialogue
6. Physcially reset your Echo. You can do this by holding down the Microphone and Volume Down ( - ) button until the ring goes yellw (NOTE: This was for the Echo 2. If this doesn't work click [this link](http://lmgtfy.com/?q=how+to+reset+amazon+echo) and be sure to update the search query with your model)
7. In the Settings are of alexa.amazon.co.uk, click 'Set up a new Device' and follow the steps. It will ask you to connect to the Echo's wifi to configure it.
8. Your done!

You will need to repeat the second group of steps for each of your Echo devices that are suffering with the problem. I had to reset my Echo Dot twice for some reason. The above steps worked first time for my Echo.

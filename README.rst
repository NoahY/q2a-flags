===========================================
Question2Answer Flags
===========================================
-----------
Description
-----------
This is a plugin for **Question2Answer** that provides flag display for non-WP-integrated installs and Buddypress_ integrated installs.

.. _Buddypress: http://www.buddypress.org/

--------
Features
--------
- allows display of 4 sizes of flags, 252 countries, all images included
- creates select field for users to select country
- adds flags to post meta for users
- automatically detects whether Buddypress or non-WP, prevents use for non-BP-WP-integration
- creates user field via button, populates field for Buddypress
- replaces user field on-the-fly for non-WP install

.. _Buddypress: http://www.buddypress.org/

------------
Installation
------------
#. Install Question2Answer_
#. Get the source code for this plugin from github_, either using git_, or downloading directly:

   - To download using git, install git and then type 
     ``git clone git://github.com/NoahY/q2a-flags.git flags``
     at the command prompt (on Linux, Windows is a bit different)
   - To download directly, go to the `project page`_ and click **Download**

#. navigate to your site, go to **Admin -> Plugins** and select the '**Enable Flags**' option, then '**Save**'.
#. You will also need to create a Buddypress profile field called "country" and populate it with the names in qa-plugin.php.

.. _Question2Answer: http://www.question2answer.org/install.php
.. _git: http://git-scm.com/
.. _github:
.. _project page: https://github.com/NoahY/q2a-flags

----------
Disclaimer
----------
This is **beta** code. It is probably okay for production environments, but may not work exactly as expected. Refunds will not be given. If it breaks, you get to keep both parts.


-------
Release
-------
All code herein is Copylefted_.

.. _Copylefted: http://en.wikipedia.org/wiki/Copyleft

---------
About q2A
---------
Question2Answer is a free and open source platform for Q&A sites. For more information, visit:

http://www.question2answer.org/


QuickReply Reloaded for phpBB 3.3
==========

Extended possibilities to use the QuickReply feature in phpBB.
Originally developed by Татьяна5 and LavIgor ([BoardTools](https://github.com/BoardTools/QuickReply)). Now maintained by [Avathar.be](https://www.avathar.be).

#### Version
v2.1.2 (2026-03-27)

#### Support
- [Support forum](https://www.avathar.be/forum)
- https://avatharbe.github.io/QuickReply/

#### Requirements
- phpBB 3.3.0 or higher
- PHP 7.1 or higher

#### Features
- Full-featured quick reply form on the viewtopic page
- AJAX-powered posting (submit without page reload)
- Quick quote: select text in a post and insert it as a quote with one click
- Quick nick: click a username to insert @mention in the reply
- Configurable form type: standard, fixed at bottom, or popup
- Attachment support via plupload
- BBCode buttons, smilies panel, and subject field in quick reply
- Preview posts before submitting
- Compatibility with Posts Merging extension (rxu/PostsMerging)
- Transliteration support (Cyrillic to Latin)
- Per-forum enable/disable in ACP Forum Management
- ACP settings module with plugin system
- UCP user preferences for quick reply behavior
- Notification type for @mention (quick nick)
- CAPTCHA support for guests

#### Languages supported
- Arabic, Dutch, English, French, German, Hungarian, Polish, Russian, Spanish, Swedish, Turkish

### Changelog
- 2.1.2 (2026-03-27)
  - [CHG] Namespace changed from `boardtools\quickreply` to `avathar\quickreply`
  - [CHG] Updated composer.json for new maintainer
  - [NEW] Added dutch

### Installation
1. [Download the latest release](https://www.avathar.be/forum/app.php/dlext/index?cat=2) and unzip it.
2. Copy the entire contents from the unzipped folder to `/ext/avathar/quickreply/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `QuickReply Reloaded` under "Disabled Extensions" and click `Enable`.

### Configuration
Configure QuickReply by navigating in the ACP to `Extensions -> Quick Reply -> Quick Reply Settings`.

### Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `QuickReply Reloaded`.
3. To permanently uninstall, click `Delete Data`, then delete the `quickreply` folder from `/ext/avathar/`.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2014 - 2021 Татьяна5 and LavIgor
© 2026 - Avathar.be (Andy Vandenberghe)

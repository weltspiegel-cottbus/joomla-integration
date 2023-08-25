<?php
/**
 * @package     Weltspiegel
 *
 * @copyright   Copyright (C) Weltspiegel Cottbus. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE
 *
 * @since 0.0.6
 */

\defined('_JEXEC') or die;

/** @var Joomla\CMS\Document\HtmlDocument $this */

?>
<!doctype html>
<html lang="de">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <jdoc:include type="head" />
</head>
<body>
<header>
  <nav>
    <div>
      <jdoc:include type="modules" name="main-menu" />
    </div>
  </nav>
</header>
<main>
  <jdoc:include type="component" />
</main>
</body>
</html>

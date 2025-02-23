<?php

$this->set([
	'meta' => [
		'description' => 'Here you find all the presentations, press, audio and video materials related to li3 that we currently know of.'
	]
])

?>
<article class="present use-section-spacing">
	<h1 class="h-alpha"><?= $this->title('Presentations, Press, Audio and Video') ?></h1>

	<nav class="aside aside-right sticky">
		<h1 class="h-gamma">Contents</h1>
		<ul>
			<li><?= $this->html->link('Presentations', '#presentations') ?>
			<li><?= $this->html->link('Interviews', '#interviews') ?>
			<li><?= $this->html->link('Press', '#press') ?>
	</nav>

	<p>
		Here you find all the presentations, press, audio and video materials related to the
		framework that we currently know of.
		If you want your presentation to get listed here,
		<?= $this->html->link(
			"open an issue on the site's repository",
			'https://github.com/UnionOfRAD/site'
		) ?>.
		This page also archives any old material in order to document the development
		the framework took over the years and how it spread around the globe.
		Its ultimate goal however is to provide you with informational (and
		sometimes humerous and entertaining)
		material that auguments the official documentation.
	</p>

	<?= $this->html->image('present/gwoo_matsuri.jpg') ?>
	<div class="credit">
		Photo by Tetsuji Koyama
	</div>

	<hr class="section-separator">

	<section id="presentations">
		<h1 class="h-beta">Presentations</h1>

		<p><strong>Lithium: the framework with the best of both worlds</strong> by Richard McIntyre, PHPNW, 08/05/2012,
		<a href="http://www.slideshare.net/RichardMcIntyre/lithium-best">slides</a>,
		<a href="http://conference.phpnw.org.uk/phpnw12/schedule/richard-mcintyre/">announcement</a></p>

		<blockquote>
		<p>Frameworks tend to lean in either of 2 directions 1) Convention over configuration 2) Fully customizable but require large amount of architectural decisions After using a large amount of frameworks for both work and pleasure, finding Lithium which contains a healthy balance of default conventions but having true freedom to customize and configure your project both within the framework boundaries and by bending them makes this tool one of the most developer happy framework tools to use. [...]</p>
		</blockquote>

		<p><strong>Lithium - use \lithium\core\Object</strong> by John Anderson, UPHPU Meeting, 02/17/2012,
		<a href="http://www.slideshare.net/andersonjohnd/uphpu-meeting-february-17-2012">slides</a></p>

		<p><strong>The State of Lithium</strong>
		by Nate Abele, Lithium NYC meetup, 02/07/2012,
		<a href="http://www.slideshare.net/nateabele/the-state-of-lithium">slides</a>,
		<a href="http://www.ustream.tv/recorded/20292189">video</a></p>

		<blockquote>
		<p>An update on the state of the Lithium PHP framework, given at the inaugural Lithium NYC meetup, Feb. 7th, 2012.</p>
		</blockquote>

		<?= $this->html->image('present/boston.png') ?>

		<p><strong>The Lithium Way - An introduction to the most rad framework™</strong> by James Fuller, South Florida PHP Users Group, 11/09/2011,
		<a href="http://www.slideshare.net/jblotus/the-lithium-way-intro-to-lithium-php-framework">slides</a></p>

		<p><strong>The Zen of Lithium</strong> by Nate Abele, BostonPHP, 06/08/2011,
		<a href="http://vimeo.com/26183322">video</a>,
		<a href="http://www.slideshare.net/nateabele/the-zen-of-lithium">slides</a>,
		<a href="http://www.meetup.com/bostonphp/events/15553713/">announcement</a></p>

		<blockquote>
		<p>Come learn about a new PHP Framework that some are touting as a potential game changer for PHP. If you are using any of the popular PHP frameworks like CakePHP, Symfony, Zend, or CodeIgniter - then you owe it to yourself to check out what Lithium has to offer... Lithium is a framework for PHP 5.3+ that is focused on quality, speed, and flexibility. It's a set of no-nonsense philosophies and tools that enable you to build better applications, in less time, without sacrificing quality or extensibility. Lithium understands distributed storage and caching, queuing systems, micro-dispatch frameworks, with integrated support for document oriented databases like CouchDB and MongoDB, alongside relational databases like MySQL and PostgreSQL. Lithium's architecture allows you to get your application up and running quickly, and still allows you to take control of the framework to support the requirements of your application. This presentation will be presented by Nate Abele who is the co-founder of Lithium framework. Prior to this, he was the lead developer of the very popular Cake PHP framework. Nate has been a member of Boston PHP for a long time, and we are really excited to have him come talk about Lithium.
		"The Zen of Lithium" provides an overview of some of the philosophies behind the Lithium framework.</p>
		</blockquote>

		<p><strong>Lithium - the most RAD framework for PHP 5.3+</strong> by Yoan Blanc, <a href="http://yoan.dosimple.ch/misc/li3/slides.html">slides</a></p>

		<p><strong>Less Time, Less Code, Less Headache</strong> by Nate Abele, 03/05/2011,
		<a href="http://www.slideshare.net/nateabele/less-time-less-code-less-headache">slides</a></p>

		<blockquote>
		<p>Learn how developing with the Lithium framework for PHP 5.3+ not only allows you to develop applications on tighter deadlines, but how Lithium's unique, superior architecture allows much-improved maintainability over the life of your apps.</p>
		</blockquote>


		<p><strong>Lithium: The Framework for People Who Hate Frameworks, Tokyo Edition</strong> by Nate Abele &amp; Joël Perras, phpmatsuri Tokyo, 10/12/2010,
		<a href="http://www.slideshare.net/nateabele/lithium-the-framework-for-people-who-hate-frameworks-tokyo-edition">slides</a></p>

		<blockquote>
		<p>This is the updated version of Joël and my standard Lithium talk, with a few tweaks and updates since the last time we gave it.</p>
		</blockquote>

		<?= $this->html->image('present/matsuri_2010.jpg') ?>
		<div class="credit">
			<?= $this->html->link('Photo', 'https://www.flickr.com/photos/lllnorikolll-300er/5044456486') ?>
			by Noriko Yamamoto, CC BY 2.0
		</div>


		<p><strong>Building Lithium Apps</strong> by Nate Abele, Pace University NYC, 19/10/2010
		<a href="http://www.slideshare.net/nateabele/building-lithium-apps">slides</a></p>

		<blockquote>
		<p>Building Lithium Apps (Like a Boss) was a workshop presented on the structure and philosophy of the Lithium framework and its applications, and how best to take advantage of them.</p>
		</blockquote>

		<p><strong>PHP, Lithium and MongoDB</strong> by Mitch Pirtle, MongoBoston, 09/20/2010,
		<a href="http://www.slideshare.net/spacemonkeylabs/php-lithium-and-mongodb">slides</a></p>

		<p><strong>Mongodb and Totsy - E-commerce Case Study</strong> by Mitch Pirtle, MongoChicago, 08/21/2010,
		<a href="http://www.slideshare.net/spacemonkeylabs/mongodb-and-totsy-ecommerce-case-study">slides</a></p>

		<blockquote>
		<p>Deck from MongoChicago, providing a case study on the implementation of the totsy.com website using MongoDB and the Lithium framework</p>
		</blockquote>

		<p><strong>New Features in PHP 5.3 and Lithium Framework</strong> by Garrett Woodworth, LAPHP, 03/31/2010</p>

		<p><strong>Lithium: The Framework for People Who Hate Frameworks</strong> by Nate Abele &amp; Joël Perras, ConFoo, 03/11/2010, <a href="http://www.slideshare.net/nateabele/lithium-the-framework-for-people-who-hate-frameworks">slides</a></p>

		<blockquote>
		<p>This is the presentation was given at ConFoo on March 11th by Nate Abele and Joël Perras, and is an introduction to the architectural problems with other frameworks that Lithium was designed to address, and how it addresses them. It also introduces programming paradigms like functional and aspect-oriented programming which address issues that OOP doesn't account for. </p>

		<p>Finally, the talk provides a quick overview of the innovative and unparalleled features that Lithium provides, including the data layer, which supports both relational and non-relational databases.</p>
		</blockquote>

		<p><strong>Lithium - Un framework que pega como piña</strong> by Mariano Iglesias, 03/08/2010, Grupo PHP Argentina,
		<a href="http://www.slideshare.net/grupophp/mariano-iglesias-lithium-un-framework-que-pega-como-pia">slides</a></p>

		<p><strong>PHP 5.3 and Lithium: the most rad php framework</strong> by Garret Woodworth, Orange County PHP meetup, 02/24/2010,
		<a href="http://www.slideshare.net/gwoo/li3-ocphp">slides</a>,
		<a href="http://davejesch.com/technology/lithium-php-framework/">write-up</a></p>

		<blockquote>
		<p>The presentation covers the new features in php 5.3 and goes on to show how they are used in Lithium, the most rad php framework.</p>
		</blockquote>

		<p><strong>Lithiumラボ #1</strong> by Yusuke Ando, 01/30/2010,
		<a href="http://www.slideshare.net/yandod/lithium-labo-1">slides</a></p>

		<?= $this->html->image('present/matsuri_cakes.jpg') ?>
		<div class="credit">
			<?= $this->html->link('Photo', 'https://www.flickr.com/photos/lllnorikolll-300er/5043840897') ?>
			by Noriko Yamamoto, CC BY 2.0
		</div>

		<p><strong>The Origin of Lithium</strong> by Nate Abele, NYPHP, 01/26/2010,
		<a href="http://www.slideshare.net/nateabele/the-origin-of-lithium">slides</a>,
		<a href="http://www.ustream.tv/recorded/7728627">video</a></p>

		<blockquote>
		<p>This talk is an overview of the history of the PHP language and major framework projects that have emerged in the last 5 years. It examines what we've learned in the development of these frameworks, how that education has been brought to bear in Lithium. </p>
		</blockquote>
	</section>

	<hr class="section-separator red">

	<section id="interviews">
		<h1 class="h-beta">Interviews</h1>

		<p><strong>Future of PHP: Lithium - Part 2</strong>, Engine Yard Podcast hosted by Davey Shafik with Nate Abele, Garrett Woodworth, 03/30/2013, <a href="https://www.engineyard.com/podcast/future-of-php-part-2-lithium">audio</a></p>

		<blockquote>
		<p>Our own Davey Shafik interviews the core contributors and biggest fans of the Lithium framework. The panelists reflect on the direction of Lithium large milestones and a few things to come. Lithium is an awesome PHP project that aims to be the most RAD framework while providing tools to produce the highest quality code.
		Topics covered: *The current state of Lithium *Working with PHP 5.4 and 5.5 *Angular.js and Lithium *The PSRs that are being implemented</p>
		</blockquote>

		<p><strong>Lithium and Boating</strong>, Engine Yard Podcast hosted by Elizabeth Naramore with Garrett Woodwort, 06/15/2012, <a href="https://www.engineyard.com/podcast/lithium-and-boating">audio</a></p>

		<blockquote>
		<p>On the heels of our Lithium sponsorship announcement, Elizabeth Naramore interviews Garrett Woodworth (fondly known as Gwoo) about the roots of Lithium, where it's going, and how he develops it on a boat.</p>
		</blockquote>

		<p><strong>Future of PHP: Lithium</strong>, Engine Yard Podcast hosted by Elizabeth Naramore with Nate Abele, Garrett Woodworth, and John Anderson, 12/02/2011, <a href="https://www.engineyard.com/podcast/future-of-php-lithium">audio</a></p>

		<blockquote>
		<p>Lithium may seem like a relative newcomer to the PHP Framework landscape, but it has amassed a collection of die hard followers because of its simplicity, power, and extensibility. If you're one of the Lithium army, or if you just want to learn more about where it's going, check out this podcast discussion with Lithium core contributors Nate Abele, Garrett Woodworth, and John Anderson. Elizabeth Naramore moderates the discussion about what is on the horizon for Lithium, both short and long term.</p>
		</blockquote>

		<p><strong>Nerd Radio</strong> hosted by Garth Braithwaite and Leif Wells with, <a href="http://blog.nerdradio.com/post/5805621414/lithium">audio</a>, 2011</p>

		<blockquote>
		<p>Joined by Nate Abele and Garrett Woodworth (Gwoo) to discuss their latest project, Lithium, the most rad PHP framework. Then the episode nerds out until it fizzles and we turn the mics off.</p>
		</blockquote>

		<p><strong>WebDevRadio - Episode 76: Lithium Framework for PHP</strong> with Nate Abele and Garrett Woodworth, 04/30/2010, <a href="http://webdevradio.com/2010/04/episode-76-lithium-framework-for-php-2/">audio</a></p>

		<p><strong>php|architect podcast: oddWeek #003</strong> hosted by Cal Evans, Keith Casey with Nate Abele, 02/19/2010, <a href="http://www.phparch.com/2010/02/php-architect-podcast-oddweek-003/">announcement</a></p>

		<blockquote>
		<p>This week’s special guest is Nate Abele, founder of the new PHP framework Lithium.</p>
		</blockquote>

		<p><strong>php|architect Podcast: Bake'n'Shake</strong> hosted by Marco Tabini with Nate Abele, Keith Casey, Cal Evans, Davey Shafik, Beth Tucker Long, 07/2009,
		<a href="http://www.phparch.com/2009/11/phparchitect-podcast-bakenshake/">announcenment</a>,
			<?= $this->html->link('audio', '/assets/aud/phparch-podcast-2009-11-12.mp3') ?>
		</p>

		<blockquote>
		<p>In this episode, which shall henceforth be referred to as the one where we finally tell Tweeps who think we’re boring how we really feel about them, our special guest is Nate Abele, original co-developer of the CakePHP framework.</p>
		</blockquote>
	</section>

	<hr class="section-separator darkblue">

	<section id="press">
		<h1 class="h-beta">Press</h1>

		<p><strong>Engine Yard Sponsors the Lithium Framework</strong> by Elizabeth Naramore, 06/13/2012, <a href="https://blog.engineyard.com/2012/engine-yard-sponsors-the-lithium-framework">post</a></p>

		<blockquote>
		<p>We are proud to announce that Engine Yard is now the first official sponsor of the open source project, the Lithium PHP framework. We believe that Lithium holds a great deal of promise and we want to help it reach its full potential. [...]</p>
		</blockquote>

		<p><strong>PHP-Framework Lithium im Aufwind</strong>, heise Developer, 06/14/2012, <a href="http://www.heise.de/developer/meldung/PHP-Framework-Lithium-im-Aufwind-1617610.html">article</a></p>

		<blockquote>
		<p>Das PHP-Framework Lithium befindet sich im Aufwind – mit Engine Yard hat sich jetzt ein erster kommerzieller Sponsor für das Projekt gefunden. Neben rein finanzieller Unterstützung will der PaaS-Anbieter Lithium auch ideell vorantreiben [...]</p>
		</blockquote>

		<p><strong>Engine Yard Sponsors the Lithium Framework</strong>, phpdeveloper.com, <a href="http://www.phpdeveloper.org/news/18095">post</a></p>

		<p><strong>A Japanese PHP Magazine</strong>, 2010</p>

		<?= $this->html->image('lithium_japan_magazine.jpg', ['alt' => 'Japanese Magazine']) ?>
	</section>
</article>
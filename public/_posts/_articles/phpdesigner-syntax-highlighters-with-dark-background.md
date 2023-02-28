---
comments: true
slug: phpdesigner-syntax-highlighters-with-dark-background
title: phpDesigner syntax highlighters with dark background
date: 2009-10-12
author: Bilal Cinarli
profile: https://facebook.com/bcinarli
description: A black theme for phpDesigner. Sample views and installation instructions. Feel free to use it.
---
### Update
> This article is first published on bcinarli.com <br />
> Back then during my PC days, I was using this beautiful IDE. For the last 4 years (since I bought a Mac), I'm using PHPStorm from JetBrains.

[phpDesigner](http://mpsoftware.dk) is one of best php IDE I've worked with. Recently, its default white editor background become a pain for my eyes, so I decided to change its editor background to black.

Everything started after that. Just changing the background did not help me what I tried to achive. So I dig in to its syntax highlighter options and redifine the syntax colors for a better visual style. I also changed the editor's font to [Bitstream Vera Sans Mono](http://ftp.gnome.org/pub/GNOME/sources/ttf-bitstream-vera/1.10/) with 11px size.

And for the final clean-up I changed gutter and syntax separators styles to. You can download my phpDesigner styles [files](/downloads/phpdesigner_syntax.rar) and use or modify them for freely.</p>

## Editor Colors
* Active Line: red: 33, green: 33, blue: 33
* Right Edge: red: 240, green: 240, blue: 240
* Bookmarks: red: 155, green: 205, blue: 255
* Gutter: red: 22, green: 22, blue: 22
* Background: red: 22, green: 22, blue: 22
* Mark: red: 155, green: 205, blue: 255

## Gutter
* Color: aqua
* Font: Courier New 8px

## Syntax Separators
* Background: red: 33, green: 33, blue: 33
* Foreground: red: 99, green: 99, blue: 99

I think there is a little bug for syntax separators' colors. While working only one type of files like all your opened files are php, there is no problem. But while working with different file types, their color changes to black. By opening preferences window and clicking "OK" reverts the color to your defined settings.

## Screen Shots
<div class="lightbox group" markdown="1">

* HTML/xHTML/XML
  [![HTML file screenshot][html]][html]

* CSS
  [![CSS file screenshot][css]][css]

* JavaScript
  [![JavaScript file screenshot][js]][js]

* PHP
  [![PHP file screeshot][php]][php]

* VBScript
  [![VBScript file screeshot][vb]][vb]

* Perl
  [![Perl file screenshot][perl]][perl]

* Java
  [![Java file screenshot][java]][java]

* Ruby
  [![Ruby file screenshot][ruby]][ruby]

* Python
  [![Python file screenshot][python]][python]

* C#
  [![C# file screeshot][csharp]][csharp]

* SQL
  [![SQL file screenshot][sql]][sql]
</div>

## Installation

First download the style [files](/downloads/phpdesigner_syntax.rar). Then unrar them. Open phpDesigner preferences screen (hit Ctrl+E while phpDesigner is open). Click the Syntax Highlighters from tree menu. You will see a folder button on the right, hit it. A folder will open. Copy your extracted file, and paste them to the opened folder. with this, you changed the file types syntax colors. For changing the editor's background color, click the Editor menu in the Preferences window. You can change the editor fonts, gutter fonts and editor's color from this menu.

[php]: /images/2009/phpdesigner/php.png "PHP file syntax color sample"
[html]: /images/2009/phpdesigner/html.png "HTML file screenshot"
[css]: /images/2009/phpdesigner/css.png "CSS file screenshot"
[js]: /images/2009/phpdesigner/javascript.png "JavaScript file screenshot"
[vb]: /images/2009/phpdesigner/vb.png "VBScript file screenshot"
[sql]: /images/2009/phpdesigner/sql.png "SQL file screenshot"
[perl]: /images/2009/phpdesigner/perl.png "Perl file screenshot"
[java]: /images/2009/phpdesigner/java.png "Java file screenshot"
[csharp]: /images/2009/phpdesigner/csharp.png "C# file screenshot"
[python]: /images/2009/phpdesigner/python.png "Python file screenshot"
[ruby]: /images/2009/phpdesigner/ruby.png "Ruby file screenshot"

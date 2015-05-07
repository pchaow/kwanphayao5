<<<<<<< HEAD
# Semantic [![Build Status](https://travis-ci.org/Semantic-Org/Semantic-UI.svg?branch=master)](https://travis-ci.org/Semantic-Org/Semantic-UI?branch=master)
Semantic is a UI Component library implemented using a set of specifications designed around natural language.

Semantic UI is under constant development, so **be sure to check out our [release notes](https://github.com/Semantic-Org/Semantic-UI/blob/master/RELEASE%20NOTES.md) for recent changes**.

> Community contributed plugins and ports for Wordpress, Angular, Dart, Knockout, Rails, and more can be found on the [Integration page](https://github.com/Semantic-Org/Semantic-UI/wiki/Integration).

### Project Status

**Semantic is being reworked for a ``1.0`` release**

Semantic may still be officially 'pre-release', but is already used in production in large sites like [Quirky](http://www.quirky.com) and [The New Republic](http://www.newrepublic.com)

Although the pre-release branch ``0.x.x`` is actively being maintained, most important features like better theming support, and new components will land in ``1.0``.

Beta documentation are available at [http://beta.semantic-ui.com](http://beta.semantic-ui.com) for testers and early adopters. Beta channel is currently available in [branch css](https://github.com/Semantic-Org/Semantic-UI/tree/css)

Check out [this GitHub Issue thread](https://github.com/Semantic-Org/Semantic-UI/issues/691) for progress updates on 1.0 development.

## Translations

##### Right-to-Left (RTL Version)

Special RTL versions are maintained with the Arabic translation of Semantic.

* سيمانتك يو آي - الإصدار العربي - [GitHub](https://github.com/Semantic-Org/Semantic-UI-ar) - [Website](http://semantic-ui.me/)

##### Additional Translations
* 中文翻译 Semantic UI - [GitHub](https://github.com/Semantic-Org/Semantic-UI-zh) - [Website](http://zh.semantic-ui.com/)

* Tradução em Português - [GitHub](https://github.com/Semantic-Org/Semantic-UI-pt-br)

We need people who can contribute to translations of Semantic UI's documentation.

Please [reach out by e-mail](mailto:jack@semantic-ui.com) if you can help.

## Getting Started

The Semantic library describes many UI elements. In most instances it might be best to build a custom build with only the elements you need.

To download the entire library

    git clone git@github.com:Semantic-Org/Semantic-UI.git

If you prefer to download the whole kit as a zip, it is so conveniently packaged.

    http://semantic-ui.com/build/semantic.zip
    
### CDN Resources

Semantic is also available from CDN
* [Hosted on JSDelivr](http://www.jsdelivr.com/#!semantic-ui)
* [BootCDN](http://open.bootcss.com/semantic-ui/) (Chinese)

## Learn More

* [Introduction to Semantic](http://www.semantic-ui.com/introduction.html)
* [Semantic Modules](http://www.semantic-ui.com/module.html)
* [Contributing to Semantic](http://semantic-ui.com/project/contributing.html)
* [Running Docs/Server Locally](http://semantic-ui.com/project/development)

If you want to keep track of development, please [join our google group](https://groups.google.com/forum/?hl=en#!forum/semantic-ui)


### Bugs and Issues

> Semantic UI is production ready, but is "pre-release" until build and theming tools are available, and documentation is complete for all components.

Please [share any issues](https://github.com/Semantic-Org/Semantic-UI/issues?state=open) you may have. We need your help to get all the kinks out.

If you are reporting a bug *you must create a test-case*. You can [fork this jsfiddle](http://jsfiddle.net/Vbr9d/42/) to get you started or [this fiddle for 1.0 branch](http://jsfiddle.net/J9MkJ/3/).

If you need help, come hang out in `#semantic-ui` on *irc.freenode.net*.  Click here to use [webchat](http://webchat.freenode.net/?randomnick=1&channels=%23semantic-ui&prompt=1&uio=OT10cnVlJjExPTEyMwb9).

### Browser Support

* Last 2 Versions FF, Chrome, IE (aka 10+), Safari
* IE 9+ (Browser prefix only)
* Android 3
* Blackberry 10

### Reaching Out

If you'd like to start a conversation about Semantic feel free to reach out by e-mail [jack@semantic-ui.com](mailto:jack@semantic-ui.com)


### Roadmap
* [Features Missing for 1.0](https://github.com/Semantic-Org/Semantic-UI/issues?direction=desc&milestone=1&page=1&sort=updated&state=open)
* [Planned Updates for 1.X](https://github.com/Semantic-Org/Semantic-UI/issues?direction=desc&milestone=2&page=1&sort=updated&state=open)
* [Additional Components Scoped for 2.0](https://github.com/Semantic-Org/Semantic-UI/issues?direction=desc&labels=&milestone=3&page=1&sort=updated&state=open)


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/Semantic-Org/semantic-ui/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

=======
![Semantic](http://www.semantic-ui.com/images/logo.png)

# Semantic UI

[![Join the chat at https://gitter.im/Semantic-Org/Semantic-UI](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Semantic-Org/Semantic-UI?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Semantic is a UI framework designed for theming.

Key Features
* 50+ UI elements
* 3000 + CSS variables
* 3 Levels of variable inheritance (similar to SublimeText)
* Built with EM values for responsive design
* Flexbox friendly

## Install

#### Recommended Install
```bash
npm install semantic-ui  # Use themes, import build/watch tasks into your own gulpfile.
```

![Getting Started](https://dl.dropboxusercontent.com/u/2657007/install.gif)

For details on how work with Semantic theming please [read our customization guide](http://learnsemantic.com/developing/customizing.html) on [LearnSemantic.com](http://learnsemantic.com/)

#### Additional Versions

Environment | Install Script | Repo 
--- | --- | --- | 
CSS Only | `npm install semantic-ui-css` | [CSS Repo](https://github.com/Semantic-Org/Semantic-UI-CSS)
[LESS](https://github.com/less/less.js/) Only | `npm install semantic-ui-less` | [LESS Repo](https://github.com/Semantic-Org/Semantic-UI-LESS)
[LESS](https://github.com/less/less.js/) plugin | `npm install less-plugin-semantic-ui` | [LESS Plugin Repo](https://github.com/bassjobsen/less-plugin-semantic-ui/)
[EmberJS](http://emberjs.com/) | `ember install:addon semantic-ui-ember` | [Ember Repo](https://github.com/Semantic-Org/Semantic-UI-Ember)
|[Meteor](https://www.meteor.com/) - [LESS](https://github.com/less/less.js/) | `meteor add semantic:ui` | [Meteor Repo](https://github.com/Semantic-Org/Semantic-UI-Meteor) |
|[Meteor](https://www.meteor.com/) - CSS | `meteor add semantic:ui-css` | [CSS Repo](https://github.com/Semantic-Org/Semantic-UI-CSS) |
[Bower](http://bower.io/) | `bower install semantic-ui` | 

Check out our [integration wiki](https://github.com/Semantic-Org/Semantic-UI/wiki/Integration) for more options.

#### Browser Support

* Last 2 Versions FF, Chrome, IE 10+
* Safari 6
* IE 9+ (Browser prefix only)
* Android 4
* Blackberry 10

Browser prefixes are present for Internet Explorer 9, but the browser is not officially supported.

## Community

#### International

* **Chinese** A Chinese mirror site is available at [http://www.semantic-ui.cn](http://www.semantic-ui.cn)
* **Right-to-Left (RTL)** An RTL version can be created using our build tools by selecting `rtl` from the install script
* **Translation** To help translate see the [Wiki Guide](https://github.com/Semantic-Org/Semantic-UI/wiki/Translating-Semantic-UI-Docs) for translations

#### Resources

Resource | Description
--- | --- |
Bugs & Feature Requests |  All bug submission **require** a link to a test case, and a set of steps to reproduce the issue. You can make a test case by forking this [jsfiddle](http://jsfiddle.net/efp8z6Ln/), then submit your [bug report on GitHub Issues](https://github.com/Semantic-Org/Semantic-UI/issues)
Live Chat | Join our [Gitter.im Room](https://gitter.im/Semantic-Org/Semantic-UI)
Newsletter Updates | Sign up for updates at [semantic-ui.com](http://www.semantic-ui.com)
Additional Resources  | Submit a question on [StackOverflow](http://www.stackoverflow.com) or ask our [Google Group](https://groups.google.com/forum/#!forum/semantic-ui)

#### Places to Help

Project | How To Help | Next Step 
--- | --- | --- | 
Localization | Help us translate Semantic UI into your language | [Join our Translation Community](https://github.com/Semantic-Org/Semantic-UI/wiki/Translating-Semantic-UI-Docs)
[SCSS](http://sass-lang.com/) | SASS needs PR to support variables inside `@import` | [Add Pull Request](https://github.com/sass/sass/pulls) for [#739](https://github.com/sass/sass/issues/739#issuecomment-73984809)
[Angular](https://angularjs.org/) | Help develop angular bindings | Reach Out on [GitHub Issues](https://github.com/Semantic-Org/Semantic-UI-Angular/issues/8)
Guides & Tutorials | Help write guides and tutorials | [Join the discussion](https://github.com/Semantic-Org/Semantic-UI/issues/1571)

#### Pull Requests

When adding pull requests be sure to merge into [next](https://github.com/Semantic-Org/Semantic-UI/tree/next) branch. If you need to demonstrate a fix in ``next`` release, you can use [this jsfiddle](http://jsfiddle.net/rduvhn8u/1/)

#### Reaching Out

If you'd like to start a conversation about Semantic feel free to e-mail me at [jack@semantic-ui.com](mailto:jack@semantic-ui.com)

[![Flattr This](https://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=jlukic&url=https%3A%2F%2Fgithub.com%2Fjlukic%2FSemantic-UI)

<a href="http://packagequality.com/#?package=semantic-ui"><img src="http://npm.packagequality.com/badge/semantic-ui.png"/></a>
>>>>>>> chaow

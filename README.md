# Kanso WordPress Block Theme

[![Code Quality](https://github.com/richtabor/kanso/actions/workflows/check-formatting.yml/badge.svg)](https://github.com/richtabor/kanso/actions/workflows/check-formatting.yml) [![Deploy to https://rich.blog](https://github.com/richtabor/kanso/actions/workflows/deploy.yml/badge.svg)](https://github.com/richtabor/kanso/actions/workflows/deploy.yml)

<a href="https://rich.blog/kanso">Kanso</a> is a simple and intuitive block theme designed with a focus on blogging. 

**[Try Kanso on WordPress Playground →](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/richtabor/kanso/main/blueprint.json&mode=seamless)**

It offers a clean and distraction-free reading experience, perfect for bloggers who want their content to take center stage. Kanso also includes several patterns for newsletters, providing an easy way to engage with your audience. The theme features 20 color variations and three font variations (sans serif, monospace, and serif), offering a variety of customization options. Additionally, Kanso supports section styles and text styles across all elements, ensuring a cohesive and visually appealing design that you can flex however you'd like.

Want cool blocks? [I have a few here.](https://github.com/richtabor/blocks) 

## Contributing

I welcome contributors to [keep iterating](https://rich.blog/iteration/) on the theme. To get started with developing Kanso WordPress theme, follow these steps:

### Prerequisites

Ensure you have the following tools installed:

- [Node.js](https://nodejs.org/) (version 14.x, 16.x, 17.x, 18.x, or 19.x recommended)
- [npm](https://www.npmjs.com/) (comes with Node.js)
- [Composer](https://getcomposer.org/)

### Setup

#### 1. Download or clone this repository
You'll want to add it to your local WordPress `wp-content/themes/` directory.

```sh
git clone https://github.com/richtabor/kanso.git
cd kanso
```

#### 2. Install dependencies
Run `npm run setup` to install all necessary development dependencies.


## Available scripts

In the project directory, you can run the following scripts:

#### 1. Code formatting
Run `npm run format` to format both PHP and JSON files according to the WordPress coding standards.

#### 2. Create theme zip
Run `npm run theme-zip` to build a zip file of the theme for distribution. 

PyroCMS-Colour-Previewer
========================

This is a widget created for PyroCMS that allows the site owner to create a colour menu for the top of their website, this will be used for changing colours of on the page to generate a preview before the colours are put into permeant use. 

## Install

First download the folder **colour_previewer** from this page. Then the widget folder should be added in one of the following locations:

The **/addons/[site-ref]/widgets/colour_previewer**

The **/addons/shared_addons/widgets/colour_previewer**

***Important:***
You may need to alter the path for a JavaScript import on line **24** in **colour_previewer/views/display.php**, this is to allow use of [jscolor](http://jscolor.com/).

## Setup

Once you have uploaded the **colour_previewer** folder, navigate and login to your PyroCMS backend, go to **Content > Widgets**. To add the widget by drag the **Colour Previewer** box into the widget area of your choice, you will then see a form in which you need to enter the following details:

* **Title:** Enter **Colour Previewer** in to this field.

* **Hide Title:** Check the box for hide title.

* **Name:** What you want the reference the colour to e.i. Page Background, this will then be displayed in the menu.

* **Element:** This is where you add the names of the IDs/Classes of the parts of the page you want to edit the colour of.

* **Colour Type:** Here you choose if you want the **background-color** or the **color** of the selected element.


## Adding Fields
In the current version you can setup 5 colour fields but in the near future I will write a guide for how to add extra fields here.
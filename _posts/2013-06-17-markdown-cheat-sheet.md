---
published: true
title: Markdown Cheat Sheet
layout: post
---

###A little about Markdown.  

Markdown was created by [John Gruber](http://daringfireball.net) and Aaron Swartz. It is a simplified human readable form of markup that outputs HTML for posting on the web or rich text for sending emails.

Markdown documents are cross-platform by nature, so you can edit them in any text-capable app on any operating system. Howerver, there are apps specifically designed for writing in Markdown.

<div class="video">
<iframe src="http://player.vimeo.com/video/55297514?byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
</div>
<p><a href="http://vimeo.com/55297514">Why Markdown Matters</a> from <a href="http://vimeo.com/mathewmitchell">Mathew Mitchell</a> on <a href="http://vimeo.com">Vimeo</a>.</p>


---

### The Markdown Syntax

**Headers**

    # Header 1
    ## Header 2
    ### Header 3
	#### Header 4
	##### Header 5
	###### Header 6

**Header with a link.**   

    [Link back to H2](#id-goes-here)

**Paragraph**

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 

To create a line break, end a line in a paragraph with two or more spaces.  
I am a sentence with  
a line break.

**Link**

    [Google](http://google.com)

**Inline markup**
	
	_italics_
 	**bold**
 	`code()`
 	Note that underscores in words are ignored in Markdown.

**Images**
    
    ![picture alt](/images/photo.jpeg "Title is optional")   
    
**Blockquotes**

    > Blockquotes are like quoted text in email replies
    >> And, they can be nested

**Lists**

    * Bullet lists are easy too
    - Another one
    + Another one

    1. A numbered list
    2. Which is numbered
    3. With periods and a space

**Code**  

Indent with four spaces to creat a code block.  
This is a normal paragraph.  

    This is a code block 

**Horizontal rules**

	* * * *
	****
	--------------------------

**Markdown plus tables**

Outer pipes on tables are optional  
Colon used for alignment (right versus left)

	| Header | Header | Right  |
	| ------ | ------ | -----: |
	|  Cell  |  Cell  |   $10  |
	|  Cell  |  Cell  |   $20  |

**Markdown plus definition lists**

	Term
	: Definition

Multiple definitions and terms are possible

	Apple
	: Pomaceous fruit of plants of the genus Malus.
	: An american computer company.

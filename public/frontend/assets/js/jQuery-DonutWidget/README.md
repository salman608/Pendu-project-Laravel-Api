# DonutWidget jQuery Plugin

DonutWidget is a simple jquery donut widget 


## Installation

1. Download the files
2. Load jquery.DonutWidget.min.css and jquery.DonutWidget.min.js


## Prerequisites
Since DonutWidget is a jquery plugin, jquery should be loaded before the plugin.

## Initalization
DonutWidget can be initialized in 2 ways

### jQuery Implementation
`
$(selector).DonutWidget(options);
`

### Implemneting using function

`
var widget = DonutWidget.draw($(selector), options);
`

### HTML implementation

#### HTML Structure
```
<div class="donut-widget" data-chart-max="<value>" data-chart-value="<value>" data-chart-text="<value>" data-chart-rotate="<value>" data-chart-caption="<value>" data-chart-primary="<value>" data-chart-background="<value>" data-chart-size="<value>"></div>
```
**The element should have class ```donut-widget```**

## Redrawing widgets
You can update one or more properties and redraw the widget

### Using jQuery
To update a property:

`
$(selector).data("$donut").options.value = 20;
`

To redraw the widget

`
$(selector).DonutWidget();
`

or you can pass the updated properties directly as

`
$(selector).DonutWidget(options);
`

### Using variable
You can pass the updated property in ```redraw``` function
`
widget.redraw(options); 
`

## Option parameters
| Parameter			| type			| Default Value	| Description														        |   
| ------------------|:-------------:| -------------:|---------------------------------------------------------------------------|
| max				| integer		| 100			| Maximum value of widget           								        |
| value     		| integer		| 0            	| value of widget                              						        |
| text				| string		| % 			| Text to be displayed inside widget. Default will be % of max		        |
| rotate    		| integer     	| 0        		| From where the widget mark should start							        |
| caption   		| string      	| empty string	| Text to be shown below the widget     							        |
| colors   			| json    		|             	| The color property must have both primary and background color codes.     |
| size  			| string     	| normal		| Size of widget. Possible values: tiny, small, normal, large, jumbo, huge  |	

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## License
MIT LICENSE

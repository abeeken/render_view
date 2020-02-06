# render_view
Example of a php function you can include in your class or module to allow basic template rendering. Includes a couple of usage examples, including rendering a template within a template.

Core function is in render_view.php and accepts:

* Template name
* Data for rendering in an array
* Flag for either rendering the page straight out or returning the buffer - this is useful for enabling the function to work with Wordpress shortcode functions which need to return the content rather than render it

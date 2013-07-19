The ASLRITC Homepage
====================
Hey there. This is the homepage of the [Alvin Sherman Library, Research, and Information Technology Center] (http://nova.edu/library/main) - and you will notice there isn't a whole lot to it. Rather, the homepage is intentionally sparse as we abstract its content to an external Wordpress. The stylesheets and scripts are loaded from a CDN, so you won't see those. This is all because the university's web server has a moratorium on server-side programming and the library's web presence itself is divided among multiple standalone applications and close to a hundred staff. The more we can decouple from the university's server to those that we control, the more feature-rich our website.

Compiled with Mixture
---------------------
Precisely because it is a static server, we leveraged [Mixture.io] (http://www.mixture.io) which lets us template-out the website using .liquid and convert it to HTML before we upload. This makes life easy. So what this means is that in this repo you'll see things like model.json and /converted-html and this is all the backend magic goop that makes things works. 

Additionally, as needed, individual .html files will be weeded as they too find life elsewhere. What exists now is really the result of a one-to-one content rollover onto a new framework.
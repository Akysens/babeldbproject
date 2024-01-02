# How to Use #

Logging in through the main page takes the user to the search page.

## **Search Page** ##
Users can search through the database via the search forms.

Users can access this page via clicking "Search" from navigation bar. 

Search page has a search-by-name area, where typing some text to the searchbar and hitting continue gives you the media from database that includes the written text in the search bar.

Above the search-by-name area users can find the implemented queries that can be done through the website. Users can perform queries for: albums that are longer than the provided time, digital works done by the provided name, or games that have a larger filesize than the provided size. User needs to go to one of the by selecting the desired query and hitting "Continue". This takes user to the desired form, where the value (time, name or size) can be entered. Hitting "Search Media" takes the user to the results page. Users can see more detailed records of any result by clicking the media "title" of the result.

## **Input Page** ##

Users can input data via the input forms.

Users can access this page via clicking "Input" from navigation bar.

Input page has a form that takes users to different forms for inputting media or relation to the database.

By selecting the desired input type and hitting "Continue", users are taken to the desired media type's input page. These pages include a form that asks for generic media information such as title, genre (or type), and date published. Then it takes more detail inputs for the specific media type. After all input has been provided, hitting "Add Media" performs a query that adds the information to the database.

## **Map Page** #

Users can view their location and their ip address in this page.

Users can access this page via clicking "Map" from navigation bar.

Once the user enters this page, system performs a API call to the geolocation service, and receives user's geolocation data. This data (i.e user's location) is displayed on the map that is in the center of the page. The exact location is marked with a marker, which has a popup that shows users IP address. Map supports standard map movements and zoom-in-outs.

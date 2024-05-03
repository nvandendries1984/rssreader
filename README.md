# RSS Reader

The RSS Reader is a web-based application designed to simplify the process of reading and managing RSS feeds. This user-friendly tool allows you to easily subscribe to your favorite RSS feeds and read the latest updates in a clean and intuitive interface.

## Key Features:
-   Feed Management: Easily add and remove your RSS feeds.
-   Feed Updates: The RSS Reader automatically checks for updates to your subscribed feeds, ensuring you stay up-to-date with the latest content.
-   User-Friendly Interface: Navigate your feeds and read articles with ease, thanks to the clean and intuitive design.

## Benefits:
-   Convenience: Access all your favorite RSS feeds in one place, saving you time and effort.
-   Staying Informed: Stayup-to-date with the latest news, articles, and updates from your favorite websites and blogs.

The RSS Reader is an ideal solution for individuals who want to stay informed and organized without the need to visit multiple websites or manually track updates. This RSS reader provides an efficient and streamlined way to keep up with the latest articles, news, and updates from your preferred sources.

## Install:
1. Clone the repository from github.
2. open your console and download the code with `git clone {URLREPOSITORY}`.
3. go to your website root folder and run `php artisan october:migrate`.

## Setup Rss Feed
1. Go to you OctoberCMS Backend and activate the Plugin if not done allready.
2. Go to the Rss Reader section and add press create.
3. Fill in the form with the RSS feed info you want.
4. After saving you Source ID wil be generated.
5. Go to your Editor and create a page wher you want the RSS feed to be visible.
6. Add the component rssviewer and klick it to add the Source ID.
7. All done
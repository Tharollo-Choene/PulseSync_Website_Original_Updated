# PulseSync Support Portal WordPress Theme

## Install

1. In WordPress, open **Appearance → Themes → Add New Theme → Upload Theme**.
2. Upload `PulseSync-WordPress-Theme.zip` and select **Install Now**.
3. Activate **PulseSync Support Portal**.
4. Optionally set up the header links under **Appearance → Menus**. The default links are used until a Primary Menu is assigned.

The theme displays the complete PulseSync portal on the site homepage automatically.

## Notes

- The site styles, Bootstrap, icons, JavaScript, NovaTech logo and blank change-request PDF are included locally in the theme.
- Homepage sections are included in the theme template; the header menu can be managed from WordPress under **Appearance → Menus**.
- The current PulseSync team roster is included as the built-in default and is saved to each visitor's browser storage. Older generic sample team names are automatically replaced with the current roster.
- Ticket and team edits are saved in each visitor's browser using `localStorage`; they are not shared with WordPress or other visitors. Browser storage is specific to the site address and device.
- The AI Coach remains a scripted demonstration and does not connect to an AI service.
- Use a WordPress hosting account with PHP 7.4+ and WordPress 6.0+.

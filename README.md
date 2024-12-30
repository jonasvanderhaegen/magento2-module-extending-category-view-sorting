# Extended Category View Sorting

This Magento 2 module extends the default category product listing sort options by adding a **"New"** sorting choice. It leverages Magento's plugin architecture to modify the catalog configuration and inject a custom sort attribute without overriding core files.

## Overview
By default, Magento 2 provides sorting options such as "Position", "Product Name", and "Price". This module introduces an additional "New" option, allowing administrators or developers to configure custom logic (e.g., sorting by creation date or a specific attribute named "new") if desired.

This one was very easy, 3 - 5 minutes work.

## How It Works
- **Plugin**:  
  - `Plugin/ConfigPlugin.php` uses an *after* plugin on the `\Magento\Catalog\Model\Config::getAttributeUsedForSortByArray` method.  
  - It merges the `"new" => __("New")` option into the existing array of sort options.

## Configuration
Once installed and enabled, the "New" sort option will automatically appear in the sorting drop-down on category pages. No additional configuration is required unless you want to programmatically define how the "New" attribute sorts products (for instance, tying it to a custom attribute or date logic).

## Compatibility
- **Magento Editions**: Works with Magento Open Source and Adobe Commerce (formerly Magento Commerce).
- **Magento Versions**: Tested on Magento 2.4.x, though it may work on earlier Magento 2 versions as well.

## Customizing the Sorting Logic
By default, adding the “New” option alone won’t change how products are internally sorted unless you configure or code logic that binds the “New” value to a specific product attribute or date field. For example, if you have a “news_from_date” or a “created_at” attribute, you might need a custom sort module to handle that logic in the product collection.

## Contributing
Feel free to open issues or submit pull requests. All contributions are welcome as long as they adhere to Magento 2 coding standards.

## License
This project is licensed under the MIT License. You’re free to use, modify, and distribute it as needed.

## Authors
Developed by me.

## Contact
For questions, improvements, or customizations, please reach out via [LinkedIn profile](https://www.linkedin.com/in/jonasvdh/).
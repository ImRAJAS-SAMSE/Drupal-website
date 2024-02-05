<?php
use Drupal\Core\Form\FormStateInterface;
/**
 * @file
 * Custom setting for Zuvi theme.
 */

function zuvi_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['#attached']['library'][] = 'zuvi/theme-settings';
  $image_zuvipro = $GLOBALS['base_url'] . '/' . \Drupal::service('extension.list.theme')->getPath('zuvi') . '/images/zuvipro.png';
  $zuvipro = '<img src="'.$image_zuvipro.'" alt="zuviPro" />';
  $form['zuvi'] = [
    '#type'       => 'vertical_tabs',
    '#title'      => '<h2 class="settings-form-title">Zuvi Theme Settings</h2>',
    '#default_tab' => 'general',
  ];

  /**
   * Main Tabs.
   */

  // Main Tabs -> General.
  $form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h3>Thanks for using ZUVI Theme</h3>Zuvi is a free Drupal 9, 10 theme designed and developed by <a href="https://drupar.com" target="_blank">Drupar.com</a>'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Color.
  $form['color'] = [
    '#type'  => 'details',
    '#title' => t('Theme Color'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Social.
  $form['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#description' => t('Social icons settings. These icons appear in the footer region.'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Homepage Slider.
  $form['slider'] = [
    '#type'  => 'details',
    '#title' => t('Homepage Slider'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Header.
  $form['header'] = [
    '#type'  => 'details',
    '#title' => t('Header'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Sidebar.
  $form['sidebar'] = [
    '#type'  => 'details',
    '#title' => t('Sidebar'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Content.
  $form['content'] = [
    '#type'  => 'details',
    '#title' => t('Content'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Footer.
  $form['footer'] = [
    '#type'  => 'details',
    '#title' => t('Footer'),
    '#group' => 'zuvi',
  ];
  // Insert codes
  $form['insert_codes'] = [
    '#type'  => 'details',
    '#title' => t('Insert Codes'),
    '#group' => 'zuvi',
  ];
  // Main Tabs -> Support.
  $form['support'] = [
    '#type'  => 'details',
    '#title' => t('Support'),
    '#group' => 'zuvi',
  ];

  // Main Tabs -> Upgrade to ZuviPro tab.
  $form['upgrade'] = [
    '#type'  => 'details',
    '#title' => t('Upgrade To ZuviPro'),
    '#description'  => t("<h3>Upgrade To ZuviPro For $29 only.</h3>"),
    '#group' => 'zuvi',
  ];

  // General -> info.
  $form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('<a href="https://drupar.com/theme/zuvi" target="_blank">Theme Homepage</a> || <a href="https://demo2.drupar.com/zuvi/" target="_blank">Theme Demo</a> || <a href="https://drupar.com/zuvi-documentation" target="_blank">Theme Documentation</a> || <a href="https://drupar.com/support" target="_blank">Theme Support</a>'),
  ];

  $form['general']['general_info_upgrade'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Upgrade To ZuviPro for $29 only'),
    '#description' => t('<a href="https://drupar.com/theme/zuvipro" target="_blank">Purchase ZuviPro</a> || <a href="https://demo2.drupar.com/zuvipro/" target="_blank">ZuviPro Demo</a>'),
  ];

  // Color -> Settings.
  $form['color']['theme_color'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Color'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  // Settings under social tab.
  // Show or hide all icons.
  $form['social']['social_profile'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Social Profile'),
  ];
  $form['social']['social_profile']['all_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons'),
  ];

  $form['social']['social_profile']['all_icons']['all_icons_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in footer'),
    '#default_value' => theme_get_setting('all_icons_show', 'zuvi'),
    '#description'   => t("Check this option to show social icons in footer. Uncheck to hide."),
  ];

  // Facebook.
    $form['social']['social_profile']['facebook'] = [
    '#type'        => 'details',
    '#title'       => t("Facebook"),
  ];

  $form['social']['social_profile']['facebook']['facebook_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#description'   => t("Enter yours facebook profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('facebook_url', 'zuvi'),
  ];

  // Twitter.
  $form['social']['social_profile']['twitter'] = [
    '#type'        => 'details',
    '#title'       => t("Twitter"),
  ];

  $form['social']['social_profile']['twitter']['twitter_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Twitter Url'),
    '#description'   => t("Enter yours twitter page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('twitter_url', 'zuvi'),
  ];

  // Instagram.
  $form['social']['social_profile']['instagram'] = [
    '#type'        => 'details',
    '#title'       => t("Instagram"),
  ];

  $form['social']['social_profile']['instagram']['instagram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Instagram Url'),
    '#description'   => t("Enter yours instagram page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('instagram_url', 'zuvi'),
  ];

  // Linkedin.
  $form['social']['social_profile']['linkedin'] = [
    '#type'        => 'details',
    '#title'       => t("Linkedin"),
  ];

  $form['social']['social_profile']['linkedin']['linkedin_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Linkedin Url'),
    '#description'   => t("Enter yours linkedin page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('linkedin_url', 'zuvi'),
  ];

  // YouTube.
  $form['social']['social_profile']['youtube'] = [
    '#type'        => 'details',
    '#title'       => t("YouTube"),
  ];

  $form['social']['social_profile']['youtube']['youtube_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('youtube_url', 'zuvi'),
  ];

  // YouTube.
  $form['social']['social_profile']['vimeo'] = [
    '#type'        => 'details',
    '#title'       => t("vimeo"),
  ];

  $form['social']['social_profile']['vimeo']['vimeo_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('vimeo Url'),
    '#description'   => t("Enter yours vimeo.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('vimeo_url', 'zuvi'),
  ];

  // telegram.
    $form['social']['social_profile']['telegram'] = [
    '#type'        => 'details',
    '#title'       => t("Telegram"),
  ];

  $form['social']['social_profile']['telegram']['telegram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Telegram Url'),
    '#description'   => t("Enter yours Telegram profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('telegram_url', 'zuvi'),
  ];

  // WhatsApp.
    $form['social']['social_profile']['whatsapp'] = [
    '#type'        => 'details',
    '#title'       => t("WhatsApp"),
  ];

  $form['social']['social_profile']['whatsapp']['whatsapp_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('WhatsApp Url'),
    '#description'   => t("Enter yours whatsapp message url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('whatsapp_url', 'zuvi'),
  ];

  // Github.
    $form['social']['social_profile']['github'] = [
    '#type'        => 'details',
    '#title'       => t("GitHub"),
  ];

  $form['social']['social_profile']['github']['github_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('GitHub Url'),
    '#description'   => t("Enter yours github page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('github_url', 'zuvi'),
  ];

  // Social -> vk.com url.
  $form['social']['social_profile']['vk'] = [
    '#type'        => 'details',
    '#title'       => t("vk.com"),
  ];
  $form['social']['social_profile']['vk']['vk_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('vk.com'),
      '#description'   => t("Enter yours vk.com page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('vk_url', 'zuvi'),
  ];

  // Social -> New Social Icons
  $form['social']['social_new_icon'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Add More Social Icons'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  // Settings under slider tab.
  // Show or hide slider on homepage.
  $form['slider']['slider_enable_option'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Enable Slider'),
  ];

  $form['slider']['slider_enable_option']['slider_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Slider on Homepage'),
    '#default_value' => theme_get_setting('slider_show', 'zuvi'),
    '#description'   => t("Check this option to show slider on homepage. Uncheck to hide."),
  ];

  // Slider -> Bottom Wave
  $form['slider']['slider'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Bottom Wave Shape'),
    '#description'   => t('<h4>Hide Slider Bottom Wave Shape</h4>This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  /* Slider Image upload */
  $form['slider']['slider_image_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Image'),
  ];
  $form['slider']['slider_image_section']['slider_image'] = [
    '#type'          => 'managed_file',
    '#upload_location' => 'public://',
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#title'  => t('<p>Upload Slider Image</p>'),
    '#default_value'  => theme_get_setting('slider_image', 'zuvi'),
    '#description'   => t('<p>Zuvi theme has limitation of single image for slider. Separate image for each slide is available in ZuviPro. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a></p>'),
  ];
  $form['slider']['slider_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Slider Code'),
    '#default_value' => theme_get_setting('slider_code', 'zuvi'),
    '#description'   => t('Please refer to this <a href="https://drupar.com/zuvi-documentation/homepage-slider" target="_blank">documentation page</a> for slider code tutorial.'),
  ];
  // Settings under header tab.
  $form['header']['sticky_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sticky Header'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  $form['header']['circle_style'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Solid or Border Animated Circles'),
    '#description'   => t('Select header animated circles type. You can set border circles or solid circles.'),
  ];
  $form['header']['circle_style']['circle_type'] = [
    '#type'          => 'select',
    '#title'         => t(''),
    '#options' => array(
      'circle_border' => t('Border'),
      'circle_solid' => t('Solid'),),
    '#default_value' => theme_get_setting('circle_type', 'zuvi'),
    '#description'   => t(''),
  ];
  $form['header']['circle_color'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Color Of Animated Circles in Header'),
    '#description'   => t('Color option is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  $form['header']['circle'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Disable Animated Circles in Header'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  // Settings under sidebar.
  $form['sidebar']['front_sidebars'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Homepage Sidebar'),
  ];
  $form['sidebar']['front_sidebars']['front_sidebar'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Sidebars On Homepage'),
    '#default_value' => theme_get_setting('front_sidebar', 'zuvi'),
    '#description'   => t('Check this option to enable left and right sidebar on homepage.'),
  ];
  $form['sidebar']['animated_sidebar'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Sidebar'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  // Settings under content tab.
  // Settings under content tab -> Page loader.
  $form['content']['preloader'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Pre Page Loader'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  $form['content']['cursor'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Fancy Cursor'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  // Settings under content tab -> Animated Content.
  $form['content']['animated_content'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Page Content'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  // Settings under content tab -> Font Icons.
  $form['content']['font_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Font Icons'),
    '#description'   => t(''),
  ];

  // Settings under content tab -> Font Icons -> FontAwesome
  $form['content']['font_icons']['font_icon_fontawesome'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Font Awesome 4'),
    '#default_value' => theme_get_setting('font_icon_fontawesome', 'zuvi'),
    '#description'   => t('Check this option to enable FontAwesome 4.7 font icons. Uncheck to disable.<br /><br />zuvi theme has included FontAwesome v4.7.0 font icons. You can use any FontAwesome font icon with zuvi theme.<br />Please visit this tutorial page for details. <a href="https://drupar.com/custom-shortcodes-set-two/fontawesome-font-icons" target="_blank">How To Use FontAwesome Font Icons</a>.<br /><br /><hr /><br />'),
  ];
  $form['content']['font_icons']['font_icon_fontawesome5'] = [
    '#type'          => 'checkbox',
    '#disabled'   => TRUE,
    '#title'         => t('Font Awesome 5'),
    '#default_value' => theme_get_setting('font_icon_fontawesome5', 'zuvi'),
    '#description'   => t('<p>This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a></p><br /><br /><hr /><br />'),
  ];
  // Settings under content tab -> Font Icons -> Google Material Icons
  $form['content']['font_icons']['font_icon_material'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Google Material Font Icons'),
    '#default_value' => theme_get_setting('font_icon_material', 'zuvi'),
    '#description'   => t('Check this option to enable Google Material font icons. Uncheck to disable.<br /><br /><br />zuvi theme has included Google material font icons. You can use any Google material icon with zuvi theme.<br />Please visit this tutorial page for details. <a href="https://drupar.com/zuvi-documentation/how-use-google-material-font-icons" target="_blank">How To Use Google Material Font Icons</a>.'),
  ];


  // Show user picture in comment.
  $form['content']['comment'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Comment'),
  ];

  $form['content']['comment']['comment_user_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('User Picture in comments'),
    '#default_value' => theme_get_setting('comment_user_pic', 'zuvi'),
    '#description'   => t("Check this option to show user picture in comment. Uncheck to hide."),
  ];

  // Node author picture.
  $form['content']['node'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node'),
  ];

  $form['content']['node']['node_author_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Author Picture'),
    '#default_value' => theme_get_setting('node_author_pic', 'zuvi'),
    '#description'   => t("Check this option to show node author picture in submitted details. Uncheck to hide."),
  ];

  $form['social']['node_share'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Share Page On Social networking websites'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  // Show tags in node submitted.
  $form['content']['node']['node_tags'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Tags'),
    '#default_value' => theme_get_setting('node_tags', 'zuvi'),
    '#description'   => t("Check this option to show node tags (if any) in submitted details. Uncheck to hide."),
  ];

  // Settings under footer tab.
  // Footer wave shape
  $form['footer']['footer_wave'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Footer Wave Shape'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  // Scroll to top.
  $form['footer']['scrolltotop'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Scroll To Top'),
  ];

  $form['footer']['scrolltotop']['scrolltotop_on'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable scroll to top feature.'),
    '#default_value' => theme_get_setting('scrolltotop_on', 'zuvi'),
    '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disable this fearure and hide scroll to top icon."),
  ];

  // Footer -> Copyright.
  $form['footer']['copyright'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Website Copyright Text'),
  ];

  $form['footer']['copyright']['copyright_text'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show website copyright text in footer.'),
    '#default_value' => theme_get_setting('copyright_text', 'zuvi'),
    '#description'   => t("Check this option to show website copyright text in footer. Uncheck to hide."),
  ];

  // Footer -> Copyright -> custom copyright text
  $form['footer']['copyright']['copyright_text_custom'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Custom copyright text'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  // Footer -> Cookie message.
  $form['footer']['cookie'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Cookie Consent message'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/ZuviPro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];

  $form['footer']['cookie']['cookie_message'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Cookie Consent Message'),
    '#description'   => t('Make your website EU Cookie Law Compliant. According to EU cookies law, websites need to get consent from visitors to store or retrieve cookies.'),
  ];
  /**
   * Insert Codes
   */
  $form['insert_codes']['insert_codes_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Insert Codes -> Head
  $form['insert_codes']['head'] = [
    '#type'        => 'details',
    '#title'       => t('Head'),
    '#description' => t('<h3>Insert Codes Before &lt;/HEAD&gt;</h3><hr />'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> Body
  $form['insert_codes']['body'] = [
    '#type'        => 'details',
    '#title'       => t('Body'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> CSS
  $form['insert_codes']['css'] = [
    '#type'        => 'details',
    '#title'       => t('CSS Codes'),
    '#group'       => 'insert_codes_tab',
  ];
  // Insert Codes -> Head -> Head codes
  $form['insert_codes']['head']['insert_head'] = [
    '#type'          => 'fieldset',
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  // Insert Codes -> Body -> Body start codes
  $form['insert_codes']['body']['insert_body_start_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code after &lt;BODY&gt; tag'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  // Insert Codes -> Body -> Body ENd codes
  $form['insert_codes']['body']['insert_body_end_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code before &lt;/BODY&gt; tag'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/zuvipro" target="_blank">Buy ZuviPro for $29 only.</a>'),
  ];
  // Insert Codes -> css
  $form['insert_codes']['css']['custom'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Custom Styling'),
  ];

  $form['insert_codes']['css']['custom']['styling'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom css'),
    '#default_value' => theme_get_setting('styling', 'zuvi'),
    '#description'   => t("Check this option to enable custom styling. Uncheck to disable this fearure.<br />Please refer to this tutorial page. <a href='https://drupar.com/zuvi-documentation/custom-css' target='_blank'>How To Use Custom Styling</a>"),
  ];

  $form['insert_codes']['css']['custom']['styling_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom CSS Codes'),
    '#default_value' => theme_get_setting('styling_code', 'zuvi'),
    '#description'   => t('Please enter your custom css codes in this text box. You can use it to customize the appearance of your site.<br />Please refer to this tutorial for detail: <a href="https://drupar.com/zuvi-documentation/custom-css" target="_blank">Custom CSS</a>'),
  ];

  // Settings under support tab.
  $form['support']['info'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Support'),
    '#description' => t('<h4>Documentation</h4>
    <p>We have a detailed documentation about how to use theme. Please read the <a href="https://drupar.com/zuvi-documentation" target="_blank">Zuvi Theme Documentation</a>.</p>
    <hr />
    <h4>Open An Issue</h4>
    <p>If you need support that is beyond our theme documentation, please <a href="https://www.drupal.org/project/issues/zuvi" target="_blank">create an issue</a> at Drupal.org project page.</p>
    <hr />
    <h4>Contact Us</h4>
    <p>If you need some specific customization in theme, please contact us<br><a href="https://drupar.com/contact" target="_blank">drupar.com/contact</a></p>'),
  ];

  // Settings under upgrade tab.
  $form['upgrade']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('<a href="https://demo2.drupar.com/zuvipro/" target="_blank">ZuviPro Demo</a> | <a href="https://drupar.com/theme/zuvipro" target="_blank">Purchase ZuviPro for $29 only</a>'),
    '#description' => $zuvipro,
  ];
// End form.
}

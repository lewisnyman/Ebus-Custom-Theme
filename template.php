<?php
function ebusco_css_alter(&$css) {
  $exclude = array(
//    'misc/vertical-tabs.css' => FALSE,
    'modules/aggregator/aggregator.css' => FALSE,
//    'modules/block/block.css' => FALSE,
//    'modules/book/book.css' => FALSE,
//    'modules/comment/comment.css' => FALSE,
//    'modules/dblog/dblog.css' => FALSE,
    'modules/file/file.css' => FALSE,
    'modules/filter/filter.css' => FALSE,
 //   'modules/forum/forum.css' => FALSE,
    'modules/help/help.css' => FALSE,
//    'modules/menu/menu.css' => FALSE,
//    'modules/node/node.css' => FALSE,
//    'modules/openid/openid.css' => FALSE,
//    'modules/poll/poll.css' => FALSE,
//    'modules/profile/profile.css' => FALSE,
//    'modules/search/search.css' => FALSE,
    'modules/statistics/statistics.css' => FALSE,
    'modules/syslog/syslog.css' => FALSE,
    'modules/system/admin.css' => FALSE,
    'modules/system/maintenance.css' => FALSE,
//    'modules/system/system.css' => FALSE,
    'modules/system/system.admin.css' => FALSE,
 //   'modules/system/system.base.css' => FALSE,
 //   'modules/system/system.maintenance.css' => FALSE,
 //   'modules/system/system.menus.css' => FALSE,
 //   'modules/system/system.messages.css' => FALSE,
 //   'modules/system/system.theme.css' => FALSE,
    'modules/taxonomy/taxonomy.css' => FALSE,
    'modules/tracker/tracker.css' => FALSE,
    'modules/update/update.css' => FALSE,
    'modules/field/theme/field.css' => FALSE,
    'modules/user/user.css' => FALSE,
    'modules/views/css/views.css' => FALSE,
//    'modules/logintoboggan/logintoboggan.css' => FALSE,
    'sites/all/modules/heartbeat/css/heartbeat.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}

/**
 * Theme function for the timestamp of a message.
 */
function ebusco_heartbeat_time_ago($variables) {

  $message = $variables['message'];

  $time_info = '';

  if ($message->show_message_times) {
    $message_date = _theme_time_ago($message->timestamp);
    if ($message->target_count <= 1 || $message->show_message_times_grouped) {

      $time_info .= '<small class="heartbeat-time-ago">';
      $time_info .= l($message_date, 'heartbeat/message/' . $message->uaid, array('html' => TRUE));
      $time_info .= '</small>';

    }
  }

  return $time_info;
}

function ebusco_form_alter(&$form, &$form_state, $form_id) {
  //dsm($form_id);  // print form ID to messages
  //dsm($form);  // pretty print array using Krumo to messages
  switch ($form_id)  {
    case 'search_block_form':
      $form['search_block_form']['#attributes']['placeholder'] = t('Search this site');
  }
}
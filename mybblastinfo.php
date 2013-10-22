<?php
/**
 * Plugin Name: Mybb Last Inforamtion
 * Plugin URI: http://pctricks.ir/
 * Description: This Plugin Show Mybb Info In Wordpress . Like Last post,Last User,Last Thread,Top Download
 * Version: 1.5.1
 * Author: <a href="http://pctricks.ir/">Mostafa Shiraali</a>
 * Author URI: http://pctricks.ir/
 * License: A "Slug" license name e.g. GPL2
 */
 function mybblastinfo_active()
 {
 add_option('mli_mybb_host',"localhost","host of Mybb");
 add_option('mli_mybb_db',"","Database Name");
 add_option('mli_mybb_db_username',"","Database User Name");
 add_option('mli_mybb_db_password',"","Database Password");
 add_option('mli_mybb_tableprefix',"mybb_","Table Prefix");
 add_option('mli_itemnumber',5,"nubmber Items");
 add_option('mli_lastpost',"","Last Posts");
 add_option('mli_lastuser',"","Last users");
 add_option('mli_mostview',"","Most Viewed Posts");
 add_option('mli_hottopic',"","Most Popular Topics");
 add_option('mli_topreputation',"","Top Reputation");
 add_option('mli_topfiles',"","Top Files");
 add_option('mli_topposter',"","Top Poster");
 add_option('mli_lastpostchar',45,"Last Posts Title Character");
 add_option('mli_filetitle',25,"File Title chars");
 add_option('mli_fstat',"","Forum Statistics");
 add_option('mli_reffer',"","Top Reffer");
 }
 function mybblastinfo_init()
 {
 register_setting('pctriks_mli_opt','mli_mybb_host');
 register_setting('pctriks_mli_opt','mli_mybb_db');
 register_setting('pctriks_mli_opt','mli_mybb_db_username');
 register_setting('pctriks_mli_opt','mli_mybb_db_password');
 register_setting('pctriks_mli_opt','mli_mybb_tableprefix');
 register_setting('pctriks_mli_opt','mli_itemnumber');
 register_setting('pctriks_mli_opt','mli_lastpost');
 register_setting('pctriks_mli_opt','mli_lastuser');
 register_setting('pctriks_mli_opt','mli_mostview');
 register_setting('pctriks_mli_opt','mli_hottopic');
 register_setting('pctriks_mli_opt','mli_topreputation');
 register_setting('pctriks_mli_opt','mli_topfiles');
 register_setting('pctriks_mli_opt','mli_topposter');
 register_setting('pctriks_mli_opt','mli_lastpostchar');
 register_setting('pctriks_mli_opt','mli_filetitle');
 register_setting('pctriks_mli_opt','mli_fstat');
 register_setting('pctriks_mli_opt','mli_reffer');
 }
  function mybblastinfo_deactivate()
 {
 delete_option('mli_mybb_host');
 delete_option('mli_mybb_db');
 delete_option('mli_mybb_db_username');
 delete_option('mli_mybb_db_password');
 delete_option('mli_mybb_tableprefix');
 delete_option('mli_itemnumber');
 delete_option('mli_lastpost');
 delete_option('mli_lastuser');
 delete_option('mli_mostview');
 delete_option('mli_hottopic');
 delete_option('mli_topreputation');
 delete_option('mli_topfiles');
 delete_option('mli_topposter');
 delete_option('mli_lastpostchar');
 delete_option('mli_filetitle');
 delete_option('mli_fstat');
 delete_option('mli_reffer');
 }
 if ( ! function_exists ( 'mybblastinfo_lang_init' ) ) {
 function mybblastinfo_lang_init()
 {
   load_plugin_textdomain( 'mybblastinfo', false,dirname( plugin_basename( __FILE__ ) ) .'/languages/' );
 }
 }
 function mybblastinfo_menu() {
	add_options_page(__("Mybb Last Information","mybblastinfo"), __("Mybb Info","mybblastinfo"), 10, __FILE__,"mybblastinfo_display_options");
}
function mybblastinfo_display_options()
{
?>
	<div class="wrap">
	<h2><?php _e("Mybb Last Information Options","mybblastinfo")?></h2>        
	<form method="post" action="options.php">
	<?php settings_fields('pctriks_mli_opt'); ?>
	<table class="form-table">
	    <tr valign="top">
            <th scope="row"><label><?php _e("Host of Mybb","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Insert Mybb host .Default : localhost","mybblastinfo")?></span></td>
			<td><input type="text" name="mli_mybb_host" value="<?php echo get_option('mli_mybb_host'); ?>" /> </td>
        </tr>
			    <tr valign="top">
            <th scope="row"><label><?php _e("Database name","mybblastinfo");?></label></th>
			<td><input type="text" name="mli_mybb_db" value="<?php echo get_option('mli_mybb_db'); ?>" /> </td>
        </tr>
			    <tr valign="top">
            <th scope="row"><label><?php _e("Database Username","mybblastinfo");?></label></th>
			<td><input type="text" name="mli_mybb_db_username" value="<?php echo get_option('mli_mybb_db_username'); ?>" /> </td>
        </tr>
			    <tr valign="top">
            <th scope="row"><label><?php _e("Database Password","mybblastinfo");?></label></th>
			<td><input type="password" name="mli_mybb_db_password" value="<?php echo get_option('mli_mybb_db_password'); ?>" /> </td>
        </tr>
			    <tr valign="top">
            <th scope="row"><label><?php _e("Mybb Table Prefix","mybblastinfo");?></label></th>
			<td><input type="text" name="mli_mybb_tableprefix" value="<?php echo get_option('mli_mybb_tableprefix'); ?>" /> </td>
        </tr>
		</tr>
			    <tr valign="top">
            <th scope="row"><label><?php _e("Items Number","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Insert Number of Items","mybblastinfo");?></span></td>
			<td><input type="text" name="mli_itemnumber" value="<?php echo get_option('mli_itemnumber'); ?>" /> </td>
        </tr>		
		</tr>
		 <tr valign="top">
            <th scope="row"><label><?php _e("Post Title Characters","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Insert Number of Post Title Characters","mybblastinfo");?></span></td>
			<td><input type="text" name="mli_lastpostchar" value="<?php echo get_option('mli_lastpostchar'); ?>" /> </td>
        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("File Title Characters","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Insert Number of File Title Characters","mybblastinfo");?></span></td>
			<td><input type="text" name="mli_filetitle" value="<?php echo get_option('mli_filetitle'); ?>" /> </td>
        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("Forum Statistics","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Forum Statistics?","mybblastinfo");?></span></td>
			<td><input type="checkbox" name="mli_fstat" id="mli_fstat" <?php checked('mli_fstat', get_option('mli_fstat'));?> value='mli_fstat'/></td>
        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("Last Posts","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Last Mybb Posts?","mybblastinfo");?></span></td>
			<td><input type="checkbox" name="mli_lastpost" id="mli_lastpost" <?php checked('mli_lastpost', get_option('mli_lastpost'));?> value='mli_lastpost'/></td>
        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("Last Users","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Last Mybb Users?","mybblastinfo");?> </span></td>
			<td><input type="checkbox" name="mli_lastuser" id="mli_lastuser" <?php checked('mli_lastuser', get_option('mli_lastuser'));?> value='mli_lastuser'/></td>
        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("Most Viewed Posts","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Most Viewed Posts?","mybblastinfo");?> </span></td>
			<td><input type="checkbox" name="mli_mostview" id="mli_mostview" <?php checked('mli_mostview', get_option('mli_mostview'));?> value='mli_mostview'/></td>

        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("Most Popular Topics","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Most Popular Topic?","mybblastinfo");?> </span></td>
			<td><input type="checkbox" name="mli_hottopic" id="mli_hottopic" <?php checked('mli_hottopic', get_option('mli_hottopic'));?> value='mli_hottopic'/></td>
        </tr>	
		<tr valign="top">
            <th scope="row"><label><?php _e("Top Reputation","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Top Reputation?","mybblastinfo");?> </span></td>
			<td><input type="checkbox" name="mli_topreputation" id="mli_topreputation" <?php checked('mli_topreputation', get_option('mli_topreputation'));?> value='mli_topreputation'/></td>
        </tr>		
		<tr valign="top">
            <th scope="row"><label><?php _e("Top Files","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Top Files?","mybblastinfo");?></span></td>
			<td><input type="checkbox" name="mli_topfiles" id="mli_topfiles" <?php checked('mli_topfiles', get_option('mli_topfiles'));?> value='mli_topfiles'/></td>
        </tr>		
		<tr valign="top">
            <th scope="row"><label><?php _e("Top Posters","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Top Posters?","mybblastinfo");?></span></td>
			<td><input type="checkbox" name="mli_topposter" id="mli_topposter" <?php checked('mli_topposter', get_option('mli_topposter'));?> value='mli_topposter'/></td>
        </tr>
		<tr valign="top">
            <th scope="row"><label><?php _e("Top Reffer","mybblastinfo");?></label></th>
			<td><span class="description"><?php _e("Do You Want Show Top Reffer?","mybblastinfo");?></span></td>
			<td><input type="checkbox" name="mli_reffer" id="mli_reffer" <?php checked('mli_reffer', get_option('mli_reffer'));?> value='mli_reffer'/></td>
        </tr>
	</table>
	<p class="submit">
	<input type="submit" name="Submit" value="Save" />
	</p>
		</form>
	</div>
<?php
}
function pcmli_widget()
{
$hostname=get_option('mli_mybb_host');
$db_user=get_option('mli_mybb_db_username');
$db_pass=get_option('mli_mybb_db_password');
$db_dbname=get_option('mli_mybb_db');
$table_prefix=get_option('mli_mybb_tableprefix');
$item_number=get_option('mli_itemnumber');
$lastpost_chars_number=get_option('mli_lastpostchar');
$file_chars_number=get_option('mli_filetitle');
$lastpost_perm=get_option('mli_lastpost');
$lastuser_perm=get_option('mli_lastuser');
$mostviews_perm=get_option('mli_mostview');
$hottopic_perm=get_option('mli_hottopic');
$toprep_perm=get_option('mli_topreputation');
$topfiles_perm=get_option('mli_topfiles');
$topposter_perm=get_option('mli_topposter');
$fstat=get_option('mli_fstat');
$reffer=get_option('mli_reffer');
$conection=mysql_connect($hostname,$db_user,$db_pass) or die("Error Mybb Conection");
mysql_select_db($db_dbname);
mysql_query("SET NAMES utf8");
$query_forum=mysql_query("SELECT * FROM  ".$table_prefix."settings WHERE name='bburl'");
$fetch_forum=mysql_fetch_array($query_forum);
$forum_url=$fetch_forum['value'];
$query_posts=mysql_query("SELECT t1.*
FROM ".$table_prefix."posts t1
JOIN (
SELECT pid
FROM ".$table_prefix."posts
WHERE visible='1' ORDER BY pid DESC
)t2 ON t1.pid = t2.pid GROUP BY tid ORDER BY pid DESC");
$fstat_users =mysql_query("SELECT * FROM ".$table_prefix."users");
$fstat_threads =mysql_query("SELECT * FROM ".$table_prefix."threads");
$fstat_posts =mysql_query("SELECT * FROM ".$table_prefix."posts");
$fstat_banned =mysql_query("SELECT * FROM ".$table_prefix."banned");
$fstat_groups =mysql_query("SELECT * FROM ".$table_prefix."usergroups");
$fstat_forums =mysql_query("SELECT * FROM ".$table_prefix."forums");
$fstat_polls =mysql_query("SELECT * FROM ".$table_prefix."polls");
$query_mostviewed =mysql_query("SELECT * FROM ".$table_prefix."threads WHERE visible='1' ORDER BY views DESC LIMIT 0,{$item_number}");
$query_hottopics = mysql_query("SELECT * FROM ".$table_prefix."threads WHERE visible='1' ORDER BY replies DESC LIMIT 0,{$item_number}");
$query_top_poster = mysql_query("SELECT * FROM ".$table_prefix."users ORDER BY postnum DESC LIMIT 0,{$item_number}");
$query_top_reputation =mysql_query("SELECT * FROM ".$table_prefix."users ORDER BY reputation DESC LIMIT 0,{$item_number}");
$query_top_file = mysql_query("SELECT * FROM ".$table_prefix."attachments ORDER BY downloads DESC LIMIT 0,{$item_number}");
$query_users=mysql_query("SELECT * FROM  ".$table_prefix."users ORDER BY uid DESC LIMIT 0,{$item_number}");
	$query_reffer = mysql_query("
	SELECT u.uid,u.username,u.usergroup,u.displaygroup,count(*) as refcount 
	FROM ".$table_prefix."users u 
	LEFT JOIN ".$table_prefix."users r ON (r.referrer = u.uid) 
	WHERE r.referrer = u.uid 
	GROUP BY r.referrer DESC 
	ORDER BY refcount DESC 
	LIMIT 0 ,{$item_number}");	
$mybb_info='
<div id="mybbinfoaccordion">';
if($fstat)
{
$mybb_info .='<section id="item1"><h1><a href="#">'.__("Forum Statistics","mybblastinfo").'</a></h1><p>';
$mybb_info .="<li>".__("Members","mybblastinfo")." : ".mysql_num_rows($fstat_users)."</li>";
$mybb_info .="<li>".__("Threads","mybblastinfo")." : ".mysql_num_rows($fstat_threads)."</li>";
$mybb_info .="<li>".__("Posts","mybblastinfo")." : ".mysql_num_rows($fstat_posts)."</li>";
$mybb_info .="<li>".__("Banned Users","mybblastinfo")." : ".mysql_num_rows($fstat_banned)."</li>";
$mybb_info .="<li>".__("User Groups","mybblastinfo")." : ".mysql_num_rows($fstat_groups)."</li>";
$mybb_info .="<li>".__("Forums","mybblastinfo")." : ".mysql_num_rows($fstat_forums)."</li>";
$mybb_info .="<li>".__("Polls","mybblastinfo")." : ".mysql_num_rows($fstat_polls)."</li>";
$mybb_info.='</p></section>';
}
if($lastpost_perm)
{
$mybb_info .='<section id="item2"><h1><a href="#">'.__("Last Post","mybblastinfo").'</a></h1><p>';
$post_count=0;
while(($fetch=mysql_fetch_array($query_posts)) && $post_count<$item_number)
{
$mybb_info .="<li><a href=".$forum_url."/showthread.php?tid=".$fetch['tid']."&pid=".$fetch['pid']."#pid".$fetch['pid']." target=\"_blank\">".mb_substr($fetch['subject'],0,45,'utf-8')."</a></li>";
$post_count++;
}
$mybb_info.='</p></section>';
}
if($lastuser_perm)
{
$mybb_info.='<section id="item3"><h1><a href="#">'.__("Last User","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_users))
{
$mybb_info .="<li><a href=".$forum_url."/member.php?action=profile&uid=".$fetch['uid']." target=\"_blank\">".$fetch['username']."</a></li>";
}
$mybb_info.='</p></section>';
}
if($mostviews_perm)
{
$mybb_info.='<section id="item4"><h1><a href="#">'.__("Most viewed","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_mostviewed))
{
$mybb_info .="<li><a href=".$forum_url."/showthread.php?tid=".$fetch['tid']." target=\"_blank\">".mb_substr($fetch['subject'],0,$lastpost_chars_number,'utf-8')."</a></li>";
}
$mybb_info.='</p></section>';
}
if($hottopic_perm)
{
$mybb_info.='<section id="item5"><h1><a href="#">'.__("Hot Topics","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_hottopics))
{
$mybb_info .="<li><a href=".$forum_url."/showthread.php?tid=".$fetch['tid']." target=\"_blank\">".mb_substr($fetch['subject'],0,$lastpost_chars_number,'utf-8')."</a></li>";
}
$mybb_info.='</p></section>';
}
if($topposter_perm)
{
$mybb_info.='<section id="item6"><h1><a href="#">'.__("Top posting users","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_top_poster))
{
$mybb_info .="<li><a href=".$forum_url."/member.php?action=profile&uid=".$fetch['uid']." target=\"_blank\">".$fetch['username']."</a></li>";
}
$mybb_info.='</p></section>';
}
if($toprep_perm)
{
$mybb_info.='<section id="item7"><h1><a href="#">'.__("Top Reputation","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_top_reputation))
{
$mybb_info .="<li><a href=".$forum_url."/member.php?action=profile&uid=".$fetch['uid']." target=\"_blank\">".$fetch['username']."</a></li>";
}
$mybb_info.='</p></section>';
}
if($topfiles_perm)
{
$mybb_info.='<section id="item8"><h1><a href="#">'.__("Top Files","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_top_file))
{
$mybb_info .="<li><a href=".$forum_url."/showthread.php?pid==".$fetch['pid']." target=\"_blank\">".mb_substr($fetch['filename'],0,$file_chars_number,'utf-8')."</a></li>";
}
$mybb_info.='</p></section>';
}
if($reffer)
{
$mybb_info.='<section id="item9"><h1><a href="#">'.__("Top Reffer","mybblastinfo").'</a></h1><p>';
while($fetch=mysql_fetch_array($query_reffer))
{
$mybb_info .="<li><a href=".$forum_url."/member.php?action=profile&uid=".$fetch['uid']." target=\"_blank\">".$fetch['username']."</a></li>";
}
$mybb_info.='</p></section>';
}
$mybb_info.='</div>';
echo $mybb_info;
}
function widget_pctrick_mybblastinfo_init()
{
	function mybblastinfo_widget($args)
	{
		extract($args);
		$options = get_option('mybblastinfo_widget');
		$title = $options['title'];
		echo $before_widget;
		echo $before_title . $title . $after_title;
		pcmli_widget();
		echo $after_widget;
	}
	function mybblastinfo_widget_control()
	{
			$options = get_option('mybblastinfo_widget');
		if ( !is_array($options) )
			$options = array('title'=>'');
		if ( $_POST['pctrick_mybblastinfo_title_submit'] ) {
			$options['title'] = strip_tags(stripslashes($_POST['pctrick_mybblastinfo_title']));
			update_option('mybblastinfo_widget', $options);
		}
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		?>
		<p style="text-align:right; direction:rtl"><label for="pctrick_mybblastinfo_title">عنوان: <input style="width: 200px;" id="pctrick_mybblastinfo_title" name="pctrick_mybblastinfo_title" type="text" value="<?php echo $title; ?>" /></label></p>
		<input type="hidden" id="pctrick_mybblastinfo_title_submit" name="pctrick_mybblastinfo_title_submit" value="1" />
		<?php
		}
	wp_register_sidebar_widget(20000,__("Mybb Last Information","mybblastinfo"),'mybblastinfo_widget');
	wp_register_widget_control(20000,__("Mybb Last Information","mybblastinfo"), 'mybblastinfo_widget_control');		
}
function mybblastinfo_script()
{
	wp_enqueue_style('mybblastinfo-css', get_option('siteurl').'/wp-content/plugins/mybb-last-information/core/mybblastinfo.css' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('mybblastinfo-js', get_option('siteurl').'/wp-content/plugins/mybb-last-information/core/mybblastinfo.js' );
}
add_action('admin_init', 'mybblastinfo_init' );
add_action('init', 'mybblastinfo_lang_init');
add_action('admin_init', 'mybblastinfo_lang_init');
add_action('admin_menu', 'mybblastinfo_menu');
add_action('widgets_init', 'widget_pctrick_mybblastinfo_init');
add_action( 'wp_enqueue_scripts', 'mybblastinfo_script' );
register_activation_hook( __FILE__, 'mybblastinfo_active' );
register_deactivation_hook( __FILE__, 'mybblastinfo_deactivate' );

?>
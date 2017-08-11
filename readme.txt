=== DBank Uploader ===
Contributors: pipa.tk
Donate link: http://pipa.tk
Tags: post, attachment, upload, download, storage, dbank
Requires at least: 2.6
Tested up to: 3.0.1
Stable tag: trunk

== Description ==
If you are using a VPS to host your blog, maybe suffer the traffic limit. 
You can upload attachments to cloud storage engine such as Amazon S3, 
dropbox, and write the URL into the blog manually.

For a short way, you only need to upload files to dbank.com and select 
it by the plugin, than plugin will insert the URL into blog automatically.

The dbank.com website only support Chinese now.

dbank是一个网盘，作为一个有理想的网盘，他开放了部分接口，可以供第三方开发应用。
dbank有发布文件外链的功能，利用这个功能我们可以把下载流量分流给网盘，节省虚拟
主机或VPS的流量。。。可以搞一个下载站了。

安装这个插件之后，wordpress的编辑文章界面中，会出现一个dbank的图标，点击图标之
后，会弹出dbank登录界面，登录dbank之后，就会显示网盘中的目录和文件，选取需要的
文件，点击完成，就会自动把外链url贴到编辑页面。



== Installation ==
1. Upload the entire folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==
none

= Plugin Usage =
click "dbank uploader button" on editor to select attachments.

== Installation ==
1. Upload the entire `dbank-uploader` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Screenshots ==

1. dbank uploader button.
`screenshot-1.png`
2. dbank explorer.
`screenshot-2.png`

== Changelog ==
= v0.1 =
initial version, released by 2010-10-11
= v0.2 =
dbank api url modified.
== Upgrade Notice ==

none

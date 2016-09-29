<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WordPaster For tinymce-4.0.10</title>
    <link type="text/css" rel="Stylesheet" href="WordPaster/css/WordPaster.css"/>
    <link type="text/css" rel="Stylesheet" href="WordPaster/js/skygqbox.css" />
    <script type="text/javascript" src="WordPaster/js/json2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/jquery-1.4.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/WordPaster.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/skygqbox.js" charset="utf-8"></script>
	<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
</head>
<body>
	<div style=" font-size:medium; line-height:130%;">
		<p>演示方法：</p>
		<ul style="list-style-type:decimal;">
			<li>打开Word文档，复制多张图片，然后在编辑器中按 Ctrl+V 粘贴，编辑器将自动上传所有图片。</li>
			<li>复制电脑中任意图片文件，然后点击编辑器中的图片粘贴按钮。</li>
			<li>通过QQ或其它软件截屏，复制图片，然后点击编辑器中的图片粘贴按钮。</li>
		</ul>
		<p>相关问题：</p>
		<ul style="list-style-type:decimal;">
			<li>下载exe安装包手动安装后可支持IE/Firefox/Chrome。<a target="_blank" href="http://yunpan.cn/QX4tdHFfHbmV5">exe安装包</a></li>
			<li>如果无法安装控件请下载进行安装<a target="_blank" href="http://www.microsoft.com/downloads/details.aspx?FamilyID=9b2da534-3e03-4391-8a4d-074b9f2bc1bf%20">Microsoft Visual C++ 2008 Redistributable Package (x86)</a></li>
			<li>如果有任何问题或建议请向我们<a target="_blank" href="http://www.ncmem.com/blog/guestbook.asp">反馈</a></li>
        	<li><a target="_blank" href="http://www.ncmem.com/webplug/wordpaster/index.asp">产品介绍</a></li>
		</ul>
		<textarea>WordPaster与tinymce 4.x整合示例。</textarea>
	</div>
	<!--创建FCKEditor控件-->
	<script language="javascript" type="text/javascript">
        var pasterMgr = new WordPasterManager();
		pasterMgr.Fields["UserName"] = "test";
		pasterMgr.Config["PostUrl"] = "http://localhost:81/WordPaster2/WordPasterTinyMCE4x/upload.php";
		pasterMgr.Config["Cookie"] = 'PHPSESSID=<?php echo session_id() ?>';
		//pasterMgr.Config["PostUrl"] = "http://www.ncmem.com/products/upload_ori.aspx";
		pasterMgr.Load();//加载控件

		tinymce.init({ plugins:'wordpaster,netpaster',selector: 'textarea' });

		pasterMgr.SetEditor(tinymce.activeEditor);

	</script>
</body>
</html>
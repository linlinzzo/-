# 关于本项目
这个项目是本人根据无名轻博客(4jax.net)程序头部修改而成的针对SNS和twitter友好的一个头部，可以给做社交营销的朋友省点力气。
foot.php将原本本地的脚本改为公共cdn/lib库的远程调用，节省本地空间的同时还提高了网站的安全性。
baidusubmit.php和waf.php引入(插入)index.php的相关方法在php文件当中有介绍。
# 具有什么功能
这个项目要是安装上去了具有cdn的快速、waf的安全、og的分享优化、post的百度主动提交功能等。
# 如何安装
将head.php替换/assets/qblog/head.php即可。后续我们会增加管理中心的脚本以便添加头部文件。
将foot.php里面内容替换assets/qblog/foot.php中script部分的内容。
# 特别注意
本项目的文件不能单独使用(如果单独使用会出现调用数据未定义，而且本站的文件也只是修改程序的部分文件，并未完整地引用程序)。本项目必须配合无名轻博客4.0使用。

<html>
    <head><meta charset="utf-8"><title>标题</title></head>
    <body>
    <form method="post" action="viewthread.php" target="_blank">
        <div style="width:500;margin:auto">
        <h2 align="center">发表文章演示</h2>
        <div style="width:200;float:left">
            <h5>选项</h5>
            <ul style="list-style:none;margin:0px;padding:0px">
                <li><input type="checkbox" name="parse[]" value="1"> 删除HTML标签</li>
                <li><input type="checkbox" name="parse[]" value="2"> 转换HTML标签为实体</li>
                <li><input type="checkbox" name="parse[]" value="3"> 使用UBB代码</li>
                <li><input type="checkbox" name="parse[]" value="4"> 开启URL标识</li>
                <li><input type="checkbox" name="parse[]" value="5"> 使用表情</li>
                <li><input type="checkbox" name="parse[]" value="6"> 删除HTML标签</li>
            </ul>
        </div>    
        <div style="width:300;float:left">
            <h5>标题<input type="text" name="subject" size=50></h5>
            <h5>内容<textarea rows="7" cols="50" name="message"></textarea></h5>
            <input type="submit" name="replysubmit" value="发表帖子">
        </div>
        </div>
    </form>
    </body>
</html>

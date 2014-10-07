把hy.jar包放在jre/lib/ext目录下，这个包里面有HelloWorld类文件

运行JavaBridge.jar ,知晓端口号，与此相关define("JAVA_HOSTS", "127.0.0.1:8080");

代码中：
define("JAVA_HOSTS", "127.0.0.1:8080");
require_once("Java.inc");
$tf = new Java('HelloWorld');
即可调用成功
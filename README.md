设置java环境变量：（mac）
export JAVA_HOME=/Library/Java/JavaVirtualMachines/jdk1.8.0_20.jdk/Contents/Homeexport CLASSPATH=$CLASSPATH:$JAVA_HOME/lib:$JAVA_HOME/jre/lib
export PATH=$JAVA_HOME/bin:$JAVA_HOME/jre/bin:$PATH:$HOMR/bin

把hy.jar包放在jre/lib/ext目录下，这个包里面有HelloWorld类文件

运行JavaBridge.jar ,知晓端口号，与此相关define("JAVA_HOSTS", "127.0.0.1:8080");
#java -jar JavaBridge.jar SERVLET_LOCAL:8080

代码中：
define("JAVA_HOSTS", "127.0.0.1:8080");
require_once("Java.inc");
$tf = new Java('HelloWorld');
即可调用成功

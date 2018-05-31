这是18年浙江省服务外包大赛的赛题，从寒假前选定这个题目开始，我们团队就开始了需求分析等一系列流程。我在这个项目中的职责是作为项目经理，实际的工作是分析好整个流程，然后给团队成员分配好任务。在开发工作中我负责整个项目的服务端开发，还有门禁系统的物业web端界面和业主web端界面。
然后寒假便开始了整个架构的设计。一开始是调试虹软的接口从Node.js版到最后的Python版，最后终于是能成功提出出了特征值。(Node.js版能进行人脸的比对，而且更方便，但当时我还想提取出特征值，经过好多天的尝试后，还是换成了Python版，然后学了一下Flask框架，把他变成了接口开放出来。短短几句话，，真的有好多泪)。
<!-- more -->
# 需求分析
我先和团队成员对比赛需求文档进行了研究，然后讨论了几次，用xmind画了需求图。

![业主需求](http://osabfc0f3.bkt.clouddn.com/2018-05-31-15-10-38-2018531.png)

![物业需求](http://osabfc0f3.bkt.clouddn.com/2018-05-31-15-10-59-2018531.png)

![功能总览](http://osabfc0f3.bkt.clouddn.com/2018-05-31-15-11-18-2018531.png)


# 系统架构

为了提升用户体验，项目规定了性能要求和业务需求。
1. 满足1000人的注册需求
2. 识别成功并开门速度要求在1秒内
3. 有机器学习能力，跨年龄也能识别

因此，整体架构设计采用微服务架构，子系统间解耦，将复杂的人脸计算提交给性能强大的后端服务器，并实现服务的弹性扩容。使用Redis数据库来存储人脸特征值，使得人脸能快速比对。

![系统架构](http://osabfc0f3.bkt.clouddn.com/2018-05-31-15-11-40-2018531.png)

# 技术选型

这一块我是负责服务端还有后台管理端的。其中服务端用了Python的Flask框架，WebSocket用了Swoole，主服务器是用Laravel的。后台管理端这边就都是用vue。
还有服务端开的API都是RESTful风格的。

服务端技术栈

![2018-05-27-18-03-26-2018527](http://osabfc0f3.bkt.clouddn.com/2018-05-27-18-03-26-2018527.png)

门禁客户端技术栈

![2018-05-27-18-09-41-2018527](http://osabfc0f3.bkt.clouddn.com/2018-05-27-18-09-41-2018527.png)

后台管理端技术栈

![2018-05-27-18-10-06-2018527](http://osabfc0f3.bkt.clouddn.com/2018-05-27-18-10-06-2018527.png)

移动端技术栈

![2018-05-27-18-11-47-2018527](http://osabfc0f3.bkt.clouddn.com/2018-05-27-18-11-47-2018527.png)

数据库

![2018-05-27-18-13-18-2018527](http://osabfc0f3.bkt.clouddn.com/2018-05-27-18-13-18-2018527.png)

# 总结
两月初开始写，然后是五月初去比赛，最后拿了省赛一等奖，结果还行。就是项目最后冲刺的时候还是有点累的，那个星期还通宵了几次，跟大家合作开发也蛮愉快的，要我一个人肯定吃不消。然后也更好的熟悉了一下各种框架吧，最后放一下我的github小绿点吧。

![2018-05-27-18-24-37-2018527](http://osabfc0f3.bkt.clouddn.com/2018-05-27-18-24-37-2018527.png)
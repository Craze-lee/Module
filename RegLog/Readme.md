<h2>注册与登陆模块</h2>

<h3>功能需求</h3>
<ol>
<li> 注册: 填写完必填信息后，验证并发送Email等待验证</li>
<li> 登录: 输入用户名、密码与验证码。验证码可局部刷新。用户连续3次输入错误秘密后，冻结帐号。</li>
<li>找回密码: 忘记密码会，可通过注册邮箱来找回。</li>
<li>防止SQL注入</li>
<li>填写信息是用Ajax实现无刷新验证</li>
<li>应用Cookie技术实现自动登录</li>
</ol>

<h3>数据库设计</h3>
数据库db\_reglog，库中包含一个用户表tb\_member
<p>
+-----------+--------------+------+-----+---------+----------------+<br />
| Field     | Type         | Null | Key | Default | Extra          |<br />
+-----------+--------------+------+-----+---------+----------------+<br />
| id        | int(11)      | NO   | PRI | NULL    | auto\_increment |<br />
| name      | varchar(100) | NO   |     | NULL    |                |<br />
| password  | char(40)     | NO   |     | NULL    |                |<br />
| email     | varchar(100) | NO   |     | NULL    |                |<br />
| realname  | varchar(200) | NO   |     | NULL    |                |<br />
| birthday  | date         | NO   |     | NULL    |                |<br />
| telephone | varchar(25)  | NO   |     | NULL    |                |<br />
| qq        | varchar(15)  | NO   |     | NULL    |                |<br />
| count     | int(1)       | NO   |     | 0       |                |<br />
| active    | int(1)       | NO   |     | 0       |                |<br />
+-----------+--------------+------+-----+---------+----------------+
</p>

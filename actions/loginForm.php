<?php
/*
    Piti's blog is a very vulnerable web app written to illustrate a php security training
    Copyright (C) 2012 Manuel Silvoso

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
$view.=
<<<LOGIN
    <div id="loginForm">
        <form name="loginForm" action="index.php?action=login.php" method="post">
            <label for="login">Login:</label>
            <br/>
            <input type="text" name="login" id="login"/>
            <br/>
            <label for="password">Password:</label>
            <br/>
            <input type="password" name="password" id="password"/>
            <br/>
            <input type="submit" name="submit" value="submit"/>
        </form>
        <a href="/index.php?action=forgot.php">I forgot my password</a>
    </div>
LOGIN;
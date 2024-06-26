<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Timecard_project_0"></a>Timecard project!</h1>
<p class="has-line-data" data-line-start="2" data-line-end="3">Requirements:</p>
<ul>
<li class="has-line-data" data-line-start="3" data-line-end="4">user should be to log in to the tool.</li>
<li class="has-line-data" data-line-start="4" data-line-end="5">once logged in users should be able punch in/punch out their log in/log out time.</li>
<li class="has-line-data" data-line-start="5" data-line-end="7">user should be able to see a log of their punch in and punch out by date.</li>
</ul>
<h2 class="code-line" data-line-start=7 data-line-end=8 ><a id="Starting_project_7"></a>Starting project:</h2>
<p class="has-line-data" data-line-start="9" data-line-end="10">Every time we start a project we follow this routine:</p>
<ul>
<li class="has-line-data" data-line-start="10" data-line-end="13">
<p class="has-line-data" data-line-start="10" data-line-end="12">Create a new project using composer by running this command:<br>
composer create-project laravel/laravel project-name</p>
</li>
<li class="has-line-data" data-line-start="13" data-line-end="16">
<p class="has-line-data" data-line-start="13" data-line-end="15">Once installation is completed run localserver:<br>
php artisan serve</p>
</li>
<li class="has-line-data" data-line-start="16" data-line-end="24">
<p class="has-line-data" data-line-start="16" data-line-end="23">configure .env configuration file to use the appropiate database:<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=laravel<br>
DB_USERNAME=root<br>
DB_PASSWORD=</p>
</li>
<li class="has-line-data" data-line-start="24" data-line-end="27">
<p class="has-line-data" data-line-start="24" data-line-end="26">create your database and run your app’s database migrations:<br>
php astisan migrate</p>
</li>
<li class="has-line-data" data-line-start="27" data-line-end="32">
<p class="has-line-data" data-line-start="27" data-line-end="29">if you are planning use Laravel’s authentication features like login, run in your terminal the installation of your chosen stack:<br>
composer require laravel/breeze --dev</p>
<p class="has-line-data" data-line-start="30" data-line-end="31">php artisan breeze: install blade</p>
</li>
<li class="has-line-data" data-line-start="32" data-line-end="35">
<p class="has-line-data" data-line-start="32" data-line-end="34">start the Vite development server to automatically recompile your CSS and refresh the browser:<br>
npm run dev</p>
</li>
</ul>
<hr>
<h1 class="code-line" data-line-start=36 data-line-end=37 ><a id="Punch_in_functionality_and_DB_connection_36"></a>Punch in functionality and DB connection</h1>
<p class="has-line-data" data-line-start="38" data-line-end="39">This day we work on the punch in functionality and the Database connection and migration.</p>
<p class="has-line-data" data-line-start="40" data-line-end="41">some downsides had been experienced and still working on it:</p>
<ul>
<li class="has-line-data" data-line-start="41" data-line-end="42">Everything is find with DB connection</li>
<li class="has-line-data" data-line-start="42" data-line-end="43">The issue became when updating the information on the dashboard</li>
<li class="has-line-data" data-line-start="43" data-line-end="44">the punch in button isn’t turning into punch out</li>
</ul>
<hr>
<h2 class="code-line" data-line-start=45 data-line-end=46 ><a id="License_45"></a>License</h2>
<p class="has-line-data" data-line-start="47" data-line-end="48">The Laravel framework is open-sourced software licensed under the <a href="https://opensource.org/licenses/MIT">MIT license</a>.</p>
<h1 class="code-line" data-line-start=48 data-line-end=49 ><a id="_48"></a></h1>
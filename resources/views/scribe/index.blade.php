<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.0.1.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.0.1.js") }}"></script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: June 10 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1>Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="authors-module">Authors Module</h1>
    <p>
        
    </p>

            <h2 id="authors-module-GETauthors-create">authors/create</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/authors/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/authors/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IkwzeG0yYnBvYVVQRXpJVHM3bkJ0SVE9PSIsInZhbHVlIjoiRTFLL25wYnJibWFTeFI0a1RoVFRuTVpFL0ZNSzczcTNsWE5HcmdLYjA5YzduWUJaK2pKbkxHamZOSHcxZ1IxU0JiUCsxQVY1U1EvR01wK2FqMDJ4U2d0eFZudTZCeHdOeWNPczQ4T05YUGZpcXhwdXovTWhYeW5OeHJGaVorWmQiLCJtYWMiOiIwMDVhY2JmMWMxZDE2Njk1YTc0ZTJjNjBjZWE2N2IwZGM2YTg1YmJkODk3ZDA2NDVlNzlmZmM0MDcxMDg0YTY3In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6IitIL0JOa3hNMTdIbTNuT0hza3J1ZHc9PSIsInZhbHVlIjoidmJEQmd1dG5oSVJBSVUrWXJ6MkFKSEh1TkhTOFNqRldyR3dRL1IrcjVrcklqQktGTFI5bVJVa0dhVTFxbDRxR0dLdkZHTkxuMmwyTkpSTTdnM2o3S0RXdHh3cjdjU1ZYbXVPUjQzODgyaDFXQm9KS0pTWFlZVjdKbUtxWlV4cTYiLCJtYWMiOiJiN2U4ZTEzYTgzNzkyZTgyOTY3MGFiNjJjMTg4ZWJkYmY2ODZiNGY4YzU0MGMzMjJjZDE0OTE4M2QzMTBhOTlkIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">

&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name=&quot;csrf-token&quot; content=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;http://localhost/js/app.js&quot; defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;dns-prefetch&quot; href=&quot;//fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Styles --&gt;
    &lt;link href=&quot;http://localhost/css/app.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id=&quot;app&quot;&gt;
        &lt;nav class=&quot;navbar navbar-expand-md navbar-light bg-white shadow-sm&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;http://localhost&quot;&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav ml-auto&quot;&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                    &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class=&quot;py-4&quot;&gt;
                &lt;div class=&quot;w-2/3 bg-gray-200 mx-auto p-6 shadow&quot;&gt;
        &lt;form autocomplete=&quot;off&quot; action=&quot;/authors&quot; method=&quot;post&quot; class=&quot;flex flex-col items-center&quot;&gt;
            &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;            &lt;h1&gt;Add New Author&lt;/h1&gt;
            &lt;div&gt;
                &lt;input type=&quot;text&quot; class=&quot;rounded py-2 px-4 w-64&quot; name=&quot;name&quot; placeholder=&quot;Full Name&quot;&gt;
                            &lt;/div&gt;
            &lt;div class=&quot;pt-4&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;rounded py-2 px-4 w-64&quot; name=&quot;birthday&quot; placeholder=&quot;Birthday&quot;&gt;
                            &lt;/div&gt;
            &lt;div class=&quot;pt-4&quot;&gt;
                &lt;button class=&quot;bg-blue-400 text-white rounded py-2 px-4&quot;&gt;Add New Author&lt;/button&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

 </code>
        </pre>
    <div id="execution-results-GETauthors-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETauthors-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETauthors-create"></code></pre>
</div>
<div id="execution-error-GETauthors-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauthors-create"></code></pre>
</div>
<form id="form-GETauthors-create" data-method="GET"
      data-path="authors/create"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETauthors-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETauthors-create"
                    onclick="tryItOut('GETauthors-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETauthors-create"
                    onclick="cancelTryOut('GETauthors-create');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETauthors-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>authors/create</code></b>
        </p>
                    </form>

            <h2 id="authors-module-POSTauthors">authors</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/authors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/authors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTauthors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTauthors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTauthors"></code></pre>
</div>
<div id="execution-error-POSTauthors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauthors"></code></pre>
</div>
<form id="form-POSTauthors" data-method="POST"
      data-path="authors"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTauthors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTauthors"
                    onclick="tryItOut('POSTauthors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTauthors"
                    onclick="cancelTryOut('POSTauthors');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTauthors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>authors</code></b>
        </p>
                    </form>

        <h1 id="books-module">Books Module</h1>
    <p>
        
    </p>

            <h2 id="books-module-POSTbooks">books</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/books" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTbooks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTbooks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTbooks"></code></pre>
</div>
<div id="execution-error-POSTbooks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTbooks"></code></pre>
</div>
<form id="form-POSTbooks" data-method="POST"
      data-path="books"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTbooks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTbooks"
                    onclick="tryItOut('POSTbooks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTbooks"
                    onclick="cancelTryOut('POSTbooks');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTbooks" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>books</code></b>
        </p>
                    </form>

            <h2 id="books-module-PATCHbooks--book-">books/{book}</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request PATCH \
    "http://localhost/books/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/books/4"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-PATCHbooks--book-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHbooks--book-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHbooks--book-"></code></pre>
</div>
<div id="execution-error-PATCHbooks--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHbooks--book-"></code></pre>
</div>
<form id="form-PATCHbooks--book-" data-method="PATCH"
      data-path="books/{book}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('PATCHbooks--book-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHbooks--book-"
                    onclick="tryItOut('PATCHbooks--book-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHbooks--book-"
                    onclick="cancelTryOut('PATCHbooks--book-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHbooks--book-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>books/{book}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="PATCHbooks--book-" data-component="url" required  hidden>
<br>
            </p>
                    </form>

            <h2 id="books-module-DELETEbooks--book-">books/{book}</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request DELETE \
    "http://localhost/books/19" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/books/19"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-DELETEbooks--book-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEbooks--book-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEbooks--book-"></code></pre>
</div>
<div id="execution-error-DELETEbooks--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEbooks--book-"></code></pre>
</div>
<form id="form-DELETEbooks--book-" data-method="DELETE"
      data-path="books/{book}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('DELETEbooks--book-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEbooks--book-"
                    onclick="tryItOut('DELETEbooks--book-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEbooks--book-"
                    onclick="cancelTryOut('DELETEbooks--book-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEbooks--book-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>books/{book}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="DELETEbooks--book-" data-component="url" required  hidden>
<br>
            </p>
                    </form>

        <h1 id="checkinbook-module">CheckinBook Module</h1>
    <p>
        
    </p>

            <h2 id="checkinbook-module-POSTcheckin--book-">checkin/{book}</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/checkin/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/checkin/13"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTcheckin--book-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTcheckin--book-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTcheckin--book-"></code></pre>
</div>
<div id="execution-error-POSTcheckin--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcheckin--book-"></code></pre>
</div>
<form id="form-POSTcheckin--book-" data-method="POST"
      data-path="checkin/{book}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTcheckin--book-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTcheckin--book-"
                    onclick="tryItOut('POSTcheckin--book-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTcheckin--book-"
                    onclick="cancelTryOut('POSTcheckin--book-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTcheckin--book-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>checkin/{book}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="POSTcheckin--book-" data-component="url" required  hidden>
<br>
            </p>
                    </form>

        <h1 id="checkoutbook">CheckoutBook</h1>
    <p>
        
    </p>

            <h2 id="checkoutbook-POSTcheckout--book-">checkout/{book}</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/checkout/19" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/checkout/19"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTcheckout--book-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTcheckout--book-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTcheckout--book-"></code></pre>
</div>
<div id="execution-error-POSTcheckout--book-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcheckout--book-"></code></pre>
</div>
<form id="form-POSTcheckout--book-" data-method="POST"
      data-path="checkout/{book}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTcheckout--book-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTcheckout--book-"
                    onclick="tryItOut('POSTcheckout--book-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTcheckout--book-"
                    onclick="cancelTryOut('POSTcheckout--book-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTcheckout--book-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>checkout/{book}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>book</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="book" data-endpoint="POSTcheckout--book-" data-component="url" required  hidden>
<br>
            </p>
                    </form>

        <h1 id="endpoints">Endpoints</h1>
    <p>
        
    </p>

            <h2 id="endpoints-GET_debugbar-open">_debugbar/open</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_debugbar/open" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
    &quot;line&quot;: 1064,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;abort&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php&quot;,
            &quot;line&quot;: 38,
            &quot;function&quot;: &quot;abort&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_debugbar-open" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_debugbar-open"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-open"></code></pre>
</div>
<div id="execution-error-GET_debugbar-open" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-open"></code></pre>
</div>
<form id="form-GET_debugbar-open" data-method="GET"
      data-path="_debugbar/open"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-open', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_debugbar-open"
                    onclick="tryItOut('GET_debugbar-open');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_debugbar-open"
                    onclick="cancelTryOut('GET_debugbar-open');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_debugbar-open" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_debugbar/open</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GET_debugbar-clockwork--id-">Return Clockwork output</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_debugbar/clockwork/est" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_debugbar/clockwork/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
    &quot;line&quot;: 1064,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;abort&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php&quot;,
            &quot;line&quot;: 38,
            &quot;function&quot;: &quot;abort&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_debugbar-clockwork--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_debugbar-clockwork--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-clockwork--id-"></code></pre>
</div>
<div id="execution-error-GET_debugbar-clockwork--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-clockwork--id-"></code></pre>
</div>
<form id="form-GET_debugbar-clockwork--id-" data-method="GET"
      data-path="_debugbar/clockwork/{id}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-clockwork--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_debugbar-clockwork--id-"
                    onclick="tryItOut('GET_debugbar-clockwork--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_debugbar-clockwork--id-"
                    onclick="cancelTryOut('GET_debugbar-clockwork--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_debugbar-clockwork--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_debugbar/clockwork/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GET_debugbar-clockwork--id-" data-component="url" required  hidden>
<br>
<p>The ID of the clockwork.</p>            </p>
                    </form>

            <h2 id="endpoints-GET_debugbar-telescope--id-">_debugbar/telescope/{id}</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_debugbar/telescope/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_debugbar/telescope/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
    &quot;line&quot;: 1064,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;abort&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php&quot;,
            &quot;line&quot;: 38,
            &quot;function&quot;: &quot;abort&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_debugbar-telescope--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_debugbar-telescope--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-telescope--id-"></code></pre>
</div>
<div id="execution-error-GET_debugbar-telescope--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-telescope--id-"></code></pre>
</div>
<form id="form-GET_debugbar-telescope--id-" data-method="GET"
      data-path="_debugbar/telescope/{id}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-telescope--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_debugbar-telescope--id-"
                    onclick="tryItOut('GET_debugbar-telescope--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_debugbar-telescope--id-"
                    onclick="cancelTryOut('GET_debugbar-telescope--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_debugbar-telescope--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_debugbar/telescope/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GET_debugbar-telescope--id-" data-component="url" required  hidden>
<br>
<p>The ID of the telescope.</p>            </p>
                    </form>

            <h2 id="endpoints-GET_debugbar-assets-stylesheets">Return the stylesheets for the Debugbar</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_debugbar/assets/stylesheets" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
    &quot;line&quot;: 1064,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;abort&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php&quot;,
            &quot;line&quot;: 38,
            &quot;function&quot;: &quot;abort&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_debugbar-assets-stylesheets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_debugbar-assets-stylesheets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-assets-stylesheets"></code></pre>
</div>
<div id="execution-error-GET_debugbar-assets-stylesheets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-assets-stylesheets"></code></pre>
</div>
<form id="form-GET_debugbar-assets-stylesheets" data-method="GET"
      data-path="_debugbar/assets/stylesheets"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-assets-stylesheets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_debugbar-assets-stylesheets"
                    onclick="tryItOut('GET_debugbar-assets-stylesheets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_debugbar-assets-stylesheets"
                    onclick="cancelTryOut('GET_debugbar-assets-stylesheets');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_debugbar-assets-stylesheets" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_debugbar/assets/stylesheets</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GET_debugbar-assets-javascript">Return the javascript for the Debugbar</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_debugbar/assets/javascript" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
    &quot;line&quot;: 1064,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;abort&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php&quot;,
            &quot;line&quot;: 38,
            &quot;function&quot;: &quot;abort&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_debugbar-assets-javascript" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_debugbar-assets-javascript"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-assets-javascript"></code></pre>
</div>
<div id="execution-error-GET_debugbar-assets-javascript" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-assets-javascript"></code></pre>
</div>
<form id="form-GET_debugbar-assets-javascript" data-method="GET"
      data-path="_debugbar/assets/javascript"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-assets-javascript', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_debugbar-assets-javascript"
                    onclick="tryItOut('GET_debugbar-assets-javascript');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_debugbar-assets-javascript"
                    onclick="cancelTryOut('GET_debugbar-assets-javascript');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_debugbar-assets-javascript" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_debugbar/assets/javascript</code></b>
        </p>
                    </form>

            <h2 id="endpoints-DELETE_debugbar-cache--key---tags--">Forget a cache key</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request DELETE \
    "http://localhost/_debugbar/cache/atque/libero" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_debugbar/cache/atque/libero"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-DELETE_debugbar-cache--key---tags--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETE_debugbar-cache--key---tags--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETE_debugbar-cache--key---tags--"></code></pre>
</div>
<div id="execution-error-DELETE_debugbar-cache--key---tags--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETE_debugbar-cache--key---tags--"></code></pre>
</div>
<form id="form-DELETE_debugbar-cache--key---tags--" data-method="DELETE"
      data-path="_debugbar/cache/{key}/{tags?}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('DELETE_debugbar-cache--key---tags--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETE_debugbar-cache--key---tags--"
                    onclick="tryItOut('DELETE_debugbar-cache--key---tags--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETE_debugbar-cache--key---tags--"
                    onclick="cancelTryOut('DELETE_debugbar-cache--key---tags--');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETE_debugbar-cache--key---tags--" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>_debugbar/cache/{key}/{tags?}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="DELETE_debugbar-cache--key---tags--" data-component="url" required  hidden>
<br>
            </p>
                    <p>
                <b><code>tags</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tags" data-endpoint="DELETE_debugbar-cache--key---tags--" data-component="url"  hidden>
<br>
            </p>
                    </form>

            <h2 id="endpoints-GET_dusk-login--userId---guard--">Login using the given user ID / email.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_dusk/login/quia/voluptatibus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_dusk/login/quia/voluptatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjMvWVVLMFl2YXVjSWx4Y0hqVXZhZUE9PSIsInZhbHVlIjoiRWZrUTNKQkV1bktjeHg2dEMzellOK1A1YTlsVFdyY01SK0lGZkUzQVZqK0Qxd0p2MFVVcXJTU1Rqblc4WGRVazFpcWVrU0c3d29NYWZsSXV5Nys1V0RVcjZGY3ozWHZaZWVSSGhmWDNDaFRzaHlqYWhrNTBDSjdHVHhuNElIMmkiLCJtYWMiOiJhMzVjZGJiN2Q3YTc5YmU3M2Y0OGQxNzU4ZDkyZDk3YWVhMmIxODc5NTMwZWNjZjJlODYxN2M4NzEwMmM4Y2JjIn0%3D; expires=Thu, 10-Jun-2021 12:17:56 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6InNoOENERFhkc3pBdXRRRDVzR0o0alE9PSIsInZhbHVlIjoiTWVMWXEzMHFLa0xGOXJCM0tCVzkzSW43MjBoa0tBRjgxT3ZPNUoyaWhRZU4rdDcvcnI2YWpzOEhxYnJjTFp2MDVacm1tV0FDVk5aUCtUSVV1bGFPd2JsQW8vTCtVdkNYN2VDSk5GMmtkZnFyb3U5MUNtK1NoSVU2RmN3U2E5TzIiLCJtYWMiOiI1MDgxMDIyM2E4ZWE2ODc4NTAxNGI1MmI1NWU1YTVlMDcxYjZiMmY5ODBjZjJmNjZiM2YxYTRkMzdjMThiZDZmIn0%3D; expires=Thu, 10-Jun-2021 12:17:56 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Auth guard [voluptatibus] is not defined.&quot;,
    &quot;exception&quot;: &quot;InvalidArgumentException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php&quot;,
    &quot;line&quot;: 84,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php&quot;,
            &quot;line&quot;: 68,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\AuthManager&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;guard&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\AuthManager&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php&quot;,
            &quot;line&quot;: 42,
            &quot;function&quot;: &quot;__callStatic&quot;,
            &quot;class&quot;: &quot;Illuminate\\Support\\Facades\\Facade&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 48,
            &quot;function&quot;: &quot;login&quot;,
            &quot;class&quot;: &quot;Laravel\\Dusk\\Http\\Controllers\\UserController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 239,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 196,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 685,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php&quot;,
            &quot;line&quot;: 78,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\View\\Middleware\\ShareErrorsFromSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;handleStatefulRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php&quot;,
            &quot;line&quot;: 67,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\EncryptCookies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_dusk-login--userId---guard--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_dusk-login--userId---guard--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_dusk-login--userId---guard--"></code></pre>
</div>
<div id="execution-error-GET_dusk-login--userId---guard--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_dusk-login--userId---guard--"></code></pre>
</div>
<form id="form-GET_dusk-login--userId---guard--" data-method="GET"
      data-path="_dusk/login/{userId}/{guard?}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_dusk-login--userId---guard--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_dusk-login--userId---guard--"
                    onclick="tryItOut('GET_dusk-login--userId---guard--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_dusk-login--userId---guard--"
                    onclick="cancelTryOut('GET_dusk-login--userId---guard--');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_dusk-login--userId---guard--" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_dusk/login/{userId}/{guard?}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>userId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="userId" data-endpoint="GET_dusk-login--userId---guard--" data-component="url" required  hidden>
<br>
            </p>
                    <p>
                <b><code>guard</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard" data-endpoint="GET_dusk-login--userId---guard--" data-component="url"  hidden>
<br>
            </p>
                    </form>

            <h2 id="endpoints-GET_dusk-logout--guard--">Log the user out of the application.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_dusk/logout/minima" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_dusk/logout/minima"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IlpzMDZrQzdTMjNETEhNbG1ybm1tS3c9PSIsInZhbHVlIjoiTDNXaTRPQktXU0dWZWRlOC9xQUdPUmF2TWp4ek5TL3pET0FXMG9NbnVVWWs1eFFpaE0rc3MrYjl6ekJRaGlNUFVCenRpVGhRMWpEekpiNXVCRlVsc3dBb2w3UDMrK096QUJkWDhJNU44aGRkY2g1WE9oMmE5TEFkTEpybzV3WS8iLCJtYWMiOiJhMGQxZDNkMTk5MDM0OTI4MmY5NmUzNDQwYmI4Y2Y1ODA3ZTVmODZlNGViMDU4NTJlNzliZDBmZWM4NjI0NTUzIn0%3D; expires=Thu, 10-Jun-2021 12:17:56 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6IlNSdDkxL2NacHpTUCs3T0J4RDhlSXc9PSIsInZhbHVlIjoidkZQYUVXRFB6QnVaczBHdzU1amgxdzJTL3o4MFVFUFIzSFpZakhJdk53WUY2NThnSWR3WmtxcVVCWFFocmNSWHR5bGo1SGQwY09zOUhlL2FWdXM4dkdqL2dQMjVja3FKYVd3ZW1qd0V5ZGZQWGdqaUNGOFhKMTNIamtuY2doeHUiLCJtYWMiOiIzM2MyZjU1M2YwNGI3OGM0Yzk5NmVhYmU2NTc1MmQ5ZjFlNzA5YmUxMTE2YTc4MDYwNGY1Mzg0ZWQ0ODU3NWRkIn0%3D; expires=Thu, 10-Jun-2021 12:17:56 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Auth guard [minima] is not defined.&quot;,
    &quot;exception&quot;: &quot;InvalidArgumentException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php&quot;,
    &quot;line&quot;: 84,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php&quot;,
            &quot;line&quot;: 68,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\AuthManager&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;guard&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\AuthManager&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php&quot;,
            &quot;line&quot;: 59,
            &quot;function&quot;: &quot;__callStatic&quot;,
            &quot;class&quot;: &quot;Illuminate\\Support\\Facades\\Facade&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 48,
            &quot;function&quot;: &quot;logout&quot;,
            &quot;class&quot;: &quot;Laravel\\Dusk\\Http\\Controllers\\UserController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 239,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 196,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 685,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php&quot;,
            &quot;line&quot;: 78,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\View\\Middleware\\ShareErrorsFromSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;handleStatefulRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php&quot;,
            &quot;line&quot;: 67,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\EncryptCookies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_dusk-logout--guard--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_dusk-logout--guard--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_dusk-logout--guard--"></code></pre>
</div>
<div id="execution-error-GET_dusk-logout--guard--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_dusk-logout--guard--"></code></pre>
</div>
<form id="form-GET_dusk-logout--guard--" data-method="GET"
      data-path="_dusk/logout/{guard?}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_dusk-logout--guard--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_dusk-logout--guard--"
                    onclick="tryItOut('GET_dusk-logout--guard--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_dusk-logout--guard--"
                    onclick="cancelTryOut('GET_dusk-logout--guard--');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_dusk-logout--guard--" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_dusk/logout/{guard?}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>guard</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard" data-endpoint="GET_dusk-logout--guard--" data-component="url"  hidden>
<br>
            </p>
                    </form>

            <h2 id="endpoints-GET_dusk-user--guard--">Retrieve the authenticated user identifier and class name.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/_dusk/user/repellat" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/_dusk/user/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InM1SGdYNXZiNktrYk54WEs4M010MHc9PSIsInZhbHVlIjoiOThZWW1SV0hodVBBaDJ5Y3lVME54Um9QbUNZN3YvSGJHcXUrZUZKa0FwbmtHQzlUc2VuZi9mYzBWbERXVmc0eE1Wd25GK2w4aXJ4Y2RpZnZKdjBaYVQ4dER3NzJwcWIxM2J4UlF2T05tZ29uclRZSEhKVXQzeTFPeWpJS2hpK1QiLCJtYWMiOiI2Y2MyMGFiODRkYTEwODc4YmU1OGNmN2YwODI5ZDEyYzczZTUxZDViNTVhNWVhZGI4M2RlZWMxNTc1MmQ5YmJhIn0%3D; expires=Thu, 10-Jun-2021 12:17:56 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6InZpbTZvLzJBTXM5RGxxdWJsZTJOc1E9PSIsInZhbHVlIjoiVFNFS3JtaUNqWjBURllsMlF0QVlFZHo1VjRDbjFnNGVURTZZRTFzZEF4ZmdaL3l4OG1KQTdEYjZPK3U4U21pc1JKczJTL2hHOGNhdXJpNEFsZENTYU9jTzN1aFcvTmdqR2pscTZuVkF3Y216N1hESC9rVnAzakpxclVtWTQ0TW4iLCJtYWMiOiIyODE0Y2M0ZTZjYzMwMDkwOWMwMDQ1MjRlNDE2YmVmZWJiNGI0MzI0YTNmZTNiNjY5YWIyZmRiMjM0MjExMjQ0In0%3D; expires=Thu, 10-Jun-2021 12:17:56 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Auth guard [repellat] is not defined.&quot;,
    &quot;exception&quot;: &quot;InvalidArgumentException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php&quot;,
    &quot;line&quot;: 84,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php&quot;,
            &quot;line&quot;: 68,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\AuthManager&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;guard&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\AuthManager&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php&quot;,
            &quot;line&quot;: 19,
            &quot;function&quot;: &quot;__callStatic&quot;,
            &quot;class&quot;: &quot;Illuminate\\Support\\Facades\\Facade&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 48,
            &quot;function&quot;: &quot;user&quot;,
            &quot;class&quot;: &quot;Laravel\\Dusk\\Http\\Controllers\\UserController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 239,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 196,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 685,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php&quot;,
            &quot;line&quot;: 78,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\View\\Middleware\\ShareErrorsFromSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;handleStatefulRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php&quot;,
            &quot;line&quot;: 67,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\EncryptCookies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 687,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 628,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 617,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php&quot;,
            &quot;line&quot;: 60,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Barryvdh\\Debugbar\\Middleware\\InjectDebugbar&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php&quot;,
            &quot;line&quot;: 63,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\fideloper\\proxy\\src\\TrustProxies.php&quot;,
            &quot;line&quot;: 57,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fideloper\\Proxy\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 140,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 109,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 275,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 228,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 322,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 596,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 974,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\laravel-test-concepts\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}
 </code>
        </pre>
    <div id="execution-results-GET_dusk-user--guard--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_dusk-user--guard--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_dusk-user--guard--"></code></pre>
</div>
<div id="execution-error-GET_dusk-user--guard--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_dusk-user--guard--"></code></pre>
</div>
<form id="form-GET_dusk-user--guard--" data-method="GET"
      data-path="_dusk/user/{guard?}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET_dusk-user--guard--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_dusk-user--guard--"
                    onclick="tryItOut('GET_dusk-user--guard--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_dusk-user--guard--"
                    onclick="cancelTryOut('GET_dusk-user--guard--');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_dusk-user--guard--" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_dusk/user/{guard?}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>guard</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard" data-endpoint="GET_dusk-user--guard--" data-component="url"  hidden>
<br>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-user">api/user</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}
 </code>
        </pre>
    <div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETlogin">Show the application&#039;s login form.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IkNscW56Z3FabDFIMFF5S1dDRkY5TVE9PSIsInZhbHVlIjoiZ2ZMS2ZGYlRFaFZEZEZGVlBSejVtUkNEWmp1OGtHbWR5bDcydTlzUThKRWZQaUpoak56b3RYMGFITW5OamtDWENONVFSMUFmV1E4TXdZTEF1UTAwdzVtaE5wWWNGeTJxVmI4ZjM4RG5Nc09JTXVEQ3BIVFgyTTF2eU1mcXBjZGYiLCJtYWMiOiI3NGY2NjYyOGJkZmE1OGExOGI1OWUyZjhlMTQ2Y2E5ODdiMWE5MWFiZDQwNGRlZmU2YTM4NmY1MDQ2NzNlNjU2In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6IkxtaUxTZS9IRUVNMXBlY3VxSktoSGc9PSIsInZhbHVlIjoiZG5wSFlHNXg3MzdzdEx1aC8yT2NEdWtrOC9tMGtYZGNUNVhmd0JRWHFiSEtBWVd1WURicVp4NHNPSE9lWm40ZlJ4dVhKeEJ4SWk1NnVaQnBkU1AwUnJwaUxVdE0ySVd6WE9FNTRsc3IvVkNJNlVtMnFkMzVtK0dwWDRxb2pNUm4iLCJtYWMiOiI1YmM5NTY5MGZlMzAwYzRhOTY5NDk5ZDA5NmYyMzFjNDZkYjA1N2U3OWRlNjI3NWY0OGQwYWY4NTk2MmQ4NmU3In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">

&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name=&quot;csrf-token&quot; content=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;http://localhost/js/app.js&quot; defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;dns-prefetch&quot; href=&quot;//fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Styles --&gt;
    &lt;link href=&quot;http://localhost/css/app.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id=&quot;app&quot;&gt;
        &lt;nav class=&quot;navbar navbar-expand-md navbar-light bg-white shadow-sm&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;http://localhost&quot;&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav ml-auto&quot;&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                    &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class=&quot;py-4&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;
        &lt;div class=&quot;col-md-8&quot;&gt;
            &lt;div class=&quot;card&quot;&gt;
                &lt;div class=&quot;card-header&quot;&gt;Login&lt;/div&gt;

                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;form method=&quot;POST&quot; action=&quot;http://localhost/login&quot;&gt;
                        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;
                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;email&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;email&quot; type=&quot;email&quot; class=&quot;form-control &quot; name=&quot;email&quot; value=&quot;&quot; required autocomplete=&quot;email&quot; autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;password&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;Password&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;password&quot; type=&quot;password&quot; class=&quot;form-control &quot; name=&quot;password&quot; required autocomplete=&quot;current-password&quot;&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;div class=&quot;col-md-6 offset-md-4&quot;&gt;
                                &lt;div class=&quot;form-check&quot;&gt;
                                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; name=&quot;remember&quot; id=&quot;remember&quot; &gt;

                                    &lt;label class=&quot;form-check-label&quot; for=&quot;remember&quot;&gt;
                                        Remember Me
                                    &lt;/label&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row mb-0&quot;&gt;
                            &lt;div class=&quot;col-md-8 offset-md-4&quot;&gt;
                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
                                    Login
                                &lt;/button&gt;

                                                                    &lt;a class=&quot;btn btn-link&quot; href=&quot;http://localhost/password/reset&quot;&gt;
                                        Forgot Your Password?
                                    &lt;/a&gt;
                                                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

 </code>
        </pre>
    <div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETlogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET"
      data-path="login"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETlogin"
                    onclick="tryItOut('GETlogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETlogin"
                    onclick="cancelTryOut('GETlogin');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETlogin" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>login</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTlogin">Handle a login request to the application.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTlogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST"
      data-path="login"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTlogin"
                    onclick="tryItOut('POSTlogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTlogin"
                    onclick="cancelTryOut('POSTlogin');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTlogin" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>login</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTlogout">Log the user out of the application.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTlogout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST"
      data-path="logout"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTlogout"
                    onclick="tryItOut('POSTlogout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTlogout"
                    onclick="cancelTryOut('POSTlogout');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTlogout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>logout</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETregister">Show the application registration form.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6Ik42cHA4TG00bFo5dk41MExzSXAvQ1E9PSIsInZhbHVlIjoiSWc0VC9sQVZRNnhEWU1MTUo2Z3Fic0Q2VVIwK0kvUGtnclg5Mm53NDNiMDh3RXpLQ2QyMmJpVHJXVlRZaFhld0Rac2tBVTBpVXE4akhmQ2hsbVVqWUJiMUVrZWROdjZ0MGw5clkvRFdhenBiTGppWkNZMWpWUU5DRkRWcWVtUzMiLCJtYWMiOiJiZjhlYmY0NTgwNDZiODEyZjZlMjRkZjA2ZDg1N2MxMDdmOGViMTllNjZkNTAzZjRiOWY4YTAxZDQ1OTlmYjQwIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6ImU5dlhvcHg3NUlld0lod0RmTGM1WXc9PSIsInZhbHVlIjoiTW5tSlhqdll1Q29paFFMZUtZaHp6UTJocFF0V3Bja0F5QVg5S1pTa1BwVUE2YW0zemN6THpvZjlHR3RuRzYyU1JEZW1mY0NXdnlRaG1aaEVCVzJFOGVOOVBtdElrdHA4THBvVEJWZi9zb1V4YUpPNDF4NTRoK1cvMHh3M2lhbVEiLCJtYWMiOiJjM2VlZjU2NWQxZDMwNTEwNzkwMjIzNzFlZGRlMDM1NzE5YzU1NTk1ZTU3Yjc5MDc5NDIwMTY5YWE1YjgzYjIyIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">

&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name=&quot;csrf-token&quot; content=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;http://localhost/js/app.js&quot; defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;dns-prefetch&quot; href=&quot;//fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Styles --&gt;
    &lt;link href=&quot;http://localhost/css/app.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id=&quot;app&quot;&gt;
        &lt;nav class=&quot;navbar navbar-expand-md navbar-light bg-white shadow-sm&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;http://localhost&quot;&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav ml-auto&quot;&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                    &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class=&quot;py-4&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;
        &lt;div class=&quot;col-md-8&quot;&gt;
            &lt;div class=&quot;card&quot;&gt;
                &lt;div class=&quot;card-header&quot;&gt;Register&lt;/div&gt;

                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;form method=&quot;POST&quot; action=&quot;http://localhost/register&quot;&gt;
                        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;
                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;name&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;Name&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;name&quot; type=&quot;text&quot; class=&quot;form-control &quot; name=&quot;name&quot; value=&quot;&quot; required autocomplete=&quot;name&quot; autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;email&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;email&quot; type=&quot;email&quot; class=&quot;form-control &quot; name=&quot;email&quot; value=&quot;&quot; required autocomplete=&quot;email&quot;&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;password&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;Password&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;password&quot; type=&quot;password&quot; class=&quot;form-control &quot; name=&quot;password&quot; required autocomplete=&quot;new-password&quot;&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;password-confirm&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;Confirm Password&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;password-confirm&quot; type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;password_confirmation&quot; required autocomplete=&quot;new-password&quot;&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row mb-0&quot;&gt;
                            &lt;div class=&quot;col-md-6 offset-md-4&quot;&gt;
                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
                                    Register
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

 </code>
        </pre>
    <div id="execution-results-GETregister" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETregister"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"></code></pre>
</div>
<div id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister"></code></pre>
</div>
<form id="form-GETregister" data-method="GET"
      data-path="register"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETregister"
                    onclick="tryItOut('GETregister');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETregister"
                    onclick="cancelTryOut('GETregister');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETregister" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>register</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTregister">Handle a registration request for the application.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTregister"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"></code></pre>
</div>
<div id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister"></code></pre>
</div>
<form id="form-POSTregister" data-method="POST"
      data-path="register"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTregister"
                    onclick="tryItOut('POSTregister');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTregister"
                    onclick="cancelTryOut('POSTregister');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTregister" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>register</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETpassword-reset">Display the form to request a password reset link.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/password/reset" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6Im9xZnhPWWpIUnJSM25kREZvalpUdlE9PSIsInZhbHVlIjoidm1SNHJkbFRNa1hUbzF0SHUyUVdCdWhkbWwwRnVyanF3aDN4QzFmcmRQWHFOOGNVcWhyMHg0c3hha2xUSTZXZE85QTV1bldKa2lVZUNlMnFuNzJzdkZ5R2hUM1c1dnYwazlnVTB6WjlYL1BjdzZKcjBLNmRkR3U0WHI3c2hXTzAiLCJtYWMiOiI4NDVlY2MzMzAyMmFkNTAzODNhMDgxODQzZTdiNTM3ZWM2MDdmMTIxNjQ5NzIxMDA4Y2Y2ODU2MmZmNGFkZTkwIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6InFIWk5jSGVuUERBTStpNFFOdU5zckE9PSIsInZhbHVlIjoicllvcVQzNWkyYUZqNHJtUlVYaFprN2piS2wzdGFBTzZiYWpCNlBudzk2K3Q4L2VBWFZQSG16ODN0WGgxZXYxZ0xWU2tCc3JDdktqcFZYNk9hbDVxOXduTW1xQ3JTRzNUMmNyVUU4TUVzSUhvb0EyUFN2NGJ0M0RNQ09La3p2QzQiLCJtYWMiOiJmM2QyNTUzMjE0OTJiMWVhOWE0MGQ5Mjg4ZjkxZWJjNmQ2MjJhN2Y5ODI2MWU2ZmE1Y2QzZWEyOWVlYzg4MDRkIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">

&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name=&quot;csrf-token&quot; content=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;http://localhost/js/app.js&quot; defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;dns-prefetch&quot; href=&quot;//fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Styles --&gt;
    &lt;link href=&quot;http://localhost/css/app.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id=&quot;app&quot;&gt;
        &lt;nav class=&quot;navbar navbar-expand-md navbar-light bg-white shadow-sm&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;http://localhost&quot;&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav ml-auto&quot;&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                    &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class=&quot;py-4&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;
        &lt;div class=&quot;col-md-8&quot;&gt;
            &lt;div class=&quot;card&quot;&gt;
                &lt;div class=&quot;card-header&quot;&gt;Reset Password&lt;/div&gt;

                &lt;div class=&quot;card-body&quot;&gt;
                    
                    &lt;form method=&quot;POST&quot; action=&quot;http://localhost/password/email&quot;&gt;
                        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;
                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;email&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;email&quot; type=&quot;email&quot; class=&quot;form-control &quot; name=&quot;email&quot; value=&quot;&quot; required autocomplete=&quot;email&quot; autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row mb-0&quot;&gt;
                            &lt;div class=&quot;col-md-6 offset-md-4&quot;&gt;
                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
                                    Send Password Reset Link
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

 </code>
        </pre>
    <div id="execution-results-GETpassword-reset" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETpassword-reset"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset"></code></pre>
</div>
<div id="execution-error-GETpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset"></code></pre>
</div>
<form id="form-GETpassword-reset" data-method="GET"
      data-path="password/reset"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETpassword-reset"
                    onclick="tryItOut('GETpassword-reset');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETpassword-reset"
                    onclick="cancelTryOut('GETpassword-reset');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETpassword-reset" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>password/reset</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTpassword-email">Send a reset link to the given user.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/password/email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTpassword-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</div>
<div id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</div>
<form id="form-POSTpassword-email" data-method="POST"
      data-path="password/email"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTpassword-email"
                    onclick="tryItOut('POSTpassword-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTpassword-email"
                    onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>password/email</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETpassword-reset--token-">Display the password reset view for the given token.</h2>

<p>
</p>

<p>If no token is present, display the link request form.</p>

<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/password/reset/atque" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset/atque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6Ilp6ZWNVRUt2d01scTk4VE43U2ZneXc9PSIsInZhbHVlIjoieU5uaDhoaGJmbStJTUdNbGlZemhQVUhYNUhXWHdFTytPUjZtdTdUaVNEbFhucTJGaG1yN0x4YWZwZ3hYU0pYMzRocXNRMzJId2pPbXltWndLbEp2eXBzZVpWc2JtN2lLWStUcFpPQUtJMXVBV1QwcnJOcXJkZ2xERWpYbWVQSEgiLCJtYWMiOiI2ODBkNWJhNzQzN2IwYzVmNThlNjZjZjRiN2VmNWNlNjdlMDVjNzFhMjlhNDIwNjdlNThmNzZmZWVlNjBhODVlIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6ImRkemJJUHhNb3M4ZUZEckpTcVdJVlE9PSIsInZhbHVlIjoiWlpFcDJRWnlCT3lNM0pyUVJ6YjNqaUdzeFFVelJ0d3pyZDN4aUdTdW1iZFlUd0Q4V3JRME1QdWFZZ3I1MkhBQWdRai9QekpJVkt4UlhMc0tyY0lEdDMwc1Qrd2FRRVNzbXJ4UjZiL2F5bE04aE04cUR4MmtiaEhHZW1mbnhhUUkiLCJtYWMiOiJjNDk3OGI4ZTU4MjQwZDNlY2I1YWVjOWQyZTcyYThkNzRhODU5N2I1Yjg4OGQ1NWNhYTRhZWZiNjUzOWY2YmIyIn0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">

&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name=&quot;csrf-token&quot; content=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src=&quot;http://localhost/js/app.js&quot; defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;dns-prefetch&quot; href=&quot;//fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;!-- Styles --&gt;
    &lt;link href=&quot;http://localhost/css/app.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id=&quot;app&quot;&gt;
        &lt;nav class=&quot;navbar navbar-expand-md navbar-light bg-white shadow-sm&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;http://localhost&quot;&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class=&quot;navbar-nav ml-auto&quot;&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                    &lt;a class=&quot;nav-link&quot; href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class=&quot;py-4&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;
        &lt;div class=&quot;col-md-8&quot;&gt;
            &lt;div class=&quot;card&quot;&gt;
                &lt;div class=&quot;card-header&quot;&gt;Reset Password&lt;/div&gt;

                &lt;div class=&quot;card-body&quot;&gt;
                    &lt;form method=&quot;POST&quot; action=&quot;http://localhost/password/reset&quot;&gt;
                        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;5PcHJQdKF60bIjD8lhOiQ7tcmuvVyH1HUYRuKnfL&quot;&gt;
                        &lt;input type=&quot;hidden&quot; name=&quot;token&quot; value=&quot;atque&quot;&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;email&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;email&quot; type=&quot;email&quot; class=&quot;form-control &quot; name=&quot;email&quot; value=&quot;&quot; required autocomplete=&quot;email&quot; autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;password&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;Password&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;password&quot; type=&quot;password&quot; class=&quot;form-control &quot; name=&quot;password&quot; required autocomplete=&quot;new-password&quot;&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row&quot;&gt;
                            &lt;label for=&quot;password-confirm&quot; class=&quot;col-md-4 col-form-label text-md-right&quot;&gt;Confirm Password&lt;/label&gt;

                            &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;input id=&quot;password-confirm&quot; type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;password_confirmation&quot; required autocomplete=&quot;new-password&quot;&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;form-group row mb-0&quot;&gt;
                            &lt;div class=&quot;col-md-6 offset-md-4&quot;&gt;
                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
                                    Reset Password
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

 </code>
        </pre>
    <div id="execution-results-GETpassword-reset--token-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETpassword-reset--token-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset--token-"></code></pre>
</div>
<div id="execution-error-GETpassword-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset--token-"></code></pre>
</div>
<form id="form-GETpassword-reset--token-" data-method="GET"
      data-path="password/reset/{token}"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset--token-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETpassword-reset--token-"
                    onclick="tryItOut('GETpassword-reset--token-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETpassword-reset--token-"
                    onclick="cancelTryOut('GETpassword-reset--token-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETpassword-reset--token-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>password/reset/{token}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETpassword-reset--token-" data-component="url" required  hidden>
<br>
            </p>
                    </form>

            <h2 id="endpoints-POSTpassword-reset">Reset the given user&#039;s password.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/password/reset" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTpassword-reset"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</div>
<div id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</div>
<form id="form-POSTpassword-reset" data-method="POST"
      data-path="password/reset"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTpassword-reset"
                    onclick="tryItOut('POSTpassword-reset');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTpassword-reset"
                    onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>password/reset</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETpassword-confirm">Display the password confirmation view.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/password/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6ImJ3L055V2hpeTZsakdxU0FQSjYwTkE9PSIsInZhbHVlIjoicmp4VUp6TCs2NGhERlFlNG9EU1BLdlNxWkw4QjVGT095VVRoQ2NDQXAzSnhWUXNzTVo1TmkwUFZSZXF4VmJGcU5ERDE4SmJFcElEdEhaeXYyWUZQdDB3aWNGT2hhYm8rcEt0am5VQzZFZC9CaVN0eExHQjkzSVNUdmlOTXJSNEciLCJtYWMiOiIzYWVkZWEyNTJmNWI2OTY0ODBlOWQ5NTIwYjc2ZTFjZmM0OGQ4MWIxYjg1YTgzNTFiNDE5Y2YzZTkwYTBmMmI3In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6ImZ4NzJxT0NxLytmeVZFMXlsb0J5Q0E9PSIsInZhbHVlIjoiWCtWRUpRNFpKV3FWNU5QeFZ6ajBxTnR1Vk5mS1oydks2MXNyQldjQm9HRzB6RWhsc3pieG1uRXducHBOZEZXTnc2RGRVUFlxMGwrSkxHSTh4Nmg5TnhoRXQrbFcwOFBRdDdQR2d3Zm9yeCtsOXdaL3JLR2I2Z3E0MmNJU25YazEiLCJtYWMiOiI3YjI1NmFjMmFjNDM4OTNjMzNjYWI4NjBmMGEwOTliMTg2MTNiNzhjNjIxYTg3YWM3NWY0MmIyZDhmNDI3MzI0In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}
 </code>
        </pre>
    <div id="execution-results-GETpassword-confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETpassword-confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-confirm"></code></pre>
</div>
<div id="execution-error-GETpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-confirm"></code></pre>
</div>
<form id="form-GETpassword-confirm" data-method="GET"
      data-path="password/confirm"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GETpassword-confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETpassword-confirm"
                    onclick="tryItOut('GETpassword-confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETpassword-confirm"
                    onclick="cancelTryOut('GETpassword-confirm');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETpassword-confirm" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>password/confirm</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTpassword-confirm">Confirm the given user&#039;s password.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request POST \
    "http://localhost/password/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>

<div id="execution-results-POSTpassword-confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTpassword-confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-confirm"></code></pre>
</div>
<div id="execution-error-POSTpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-confirm"></code></pre>
</div>
<form id="form-POSTpassword-confirm" data-method="POST"
      data-path="password/confirm"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('POSTpassword-confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTpassword-confirm"
                    onclick="tryItOut('POSTpassword-confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTpassword-confirm"
                    onclick="cancelTryOut('POSTpassword-confirm');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTpassword-confirm" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>password/confirm</code></b>
        </p>
                    </form>

        <h1 id="home-module">Home Module</h1>
    <p>
        
    </p>

            <h2 id="home-module-GEThome">Show the application dashboard.</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/home" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6ImRUQkxLTXpYdm9aMFJFVDBRZk1IeFE9PSIsInZhbHVlIjoicWN0OHNKclhEaGhWMHZxSldlUmI5UWRidlBNNVNzL3dTd3ZEVDdMU1BtMSswSUFmcm82VDJsRFNzSWRJZHA1NDdycjNiYWVCZHZVVXgvdXNxd2NWWUZ1akxXUHdsZUNLdm05NUo2eDZ3RWovNngzOTF1WHZoSnNxWkFkaXBhcGciLCJtYWMiOiI4MWRjZjM0MzIyOWU2ZjBlMWQzNzA2NDJkYzUwOWU1YzRlOGM5YWMyNTFmNjg1NjRmZDk2YmJlZDNiZGRkNWE1In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6InExRjZpUEErQXBOQnZFelhVeVVGM0E9PSIsInZhbHVlIjoicmpkQnlKUGNyd2xYZTN1MWduWmVvZG04M1RnQ2F3bEo5S0ROdEIreXV0eFVJa0ZQRWd4TjhrVTV1ODJHcGlsZEdMb0JRQURhSjBMSGI5SlZaMFozK2dIb1ltT2VQNzZTVXZZNXIrQ2NEV1ovaFk0c05pS2dLbVBzM0cwd0JndGoiLCJtYWMiOiI0ZTYzYmZkODk3ZWNiNzEwZWNlNjU5NGZkMGUxNmI3YjZlNmQ0MjAxZDczNDU0OGQyNjgwOWM1NmI0MmUwZmE0In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">
{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}
 </code>
        </pre>
    <div id="execution-results-GEThome" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GEThome"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GEThome"></code></pre>
</div>
<div id="execution-error-GEThome" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThome"></code></pre>
</div>
<form id="form-GEThome" data-method="GET"
      data-path="home"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GEThome', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GEThome"
                    onclick="tryItOut('GEThome');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GEThome"
                    onclick="cancelTryOut('GEThome');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GEThome" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>home</code></b>
        </p>
                    </form>

        <h1 id="url-module">URL Module</h1>
    <p>
        
    </p>

            <h2 id="url-module-GET-">/</h2>

<p>
</p>



<blockquote>Example request:</blockquote>


<pre><code class="language-bash">
curl --request GET \
    --get "http://localhost/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"```</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>

            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre>
            <code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6ImJMY1pBVE9pYS94Y3FCTlllUmxzbFE9PSIsInZhbHVlIjoiZ3JKc1p0SENYT1E2cEZYNVA3Y3FzcURRcnFaaEFiVzVxQ1RLbU5CQ29rU0NlNEluZkJTR29DNHhHU3lEYjhtV0JScmpHeTVLK00yVG14SEJSMFVJdFZKbUIvYk1oSVJPSU4rbDl6c3ZQdUg0c0pDaUZJTW5vNGtDYjZ3NjVjV2MiLCJtYWMiOiI2ZTY1ODliNzcyMmVlMjAzOGUwNmZmMmQxZjFmMWU2YjFjNjg2ODcxM2IyYmIwNzE3ODQ2NDhkNzNmY2IxYjM5In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6IllEdDJzNXM3ZHRZTzZUK3pkV0l3c3c9PSIsInZhbHVlIjoiY3lVS0lFL1JldFJSS0NvaVRsbFE2RDNrNEhGM1lUNVYyVVMyVVoyVnJiSS9YOWdWRjVXMFE0YUh6eGw3UkNFeVAzMlFucmkzZmZmR3l1YU5FdlNWRlo2anU3SlA3cVVpK3Z5TU8xU21nYnZVRGhLYThkM0hJRElOOWlNOW40Q0giLCJtYWMiOiIyMGVjNjY0OGZmMWVhYzEwNTE0ZTVkYTI2NjUyZWIzODcyZjI4OWIyNTQyNWU1YTI5Y2FjMGRmZGY4YzdkNzQ0In0%3D; expires=Thu, 10-Jun-2021 12:17:57 GMT; Max-Age=7200; path=/; httponly
 </code>
            </pre>
        </details>         <pre>
                <code class="language-json">

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito:200,600&quot; rel=&quot;stylesheet&quot;&gt;

        &lt;!-- Styles --&gt;
        &lt;style&gt;
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links &gt; a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=&quot;flex-center position-ref full-height&quot;&gt;
                            &lt;div class=&quot;top-right links&quot;&gt;
                                            &lt;a href=&quot;http://localhost/login&quot;&gt;Login&lt;/a&gt;

                                                    &lt;a href=&quot;http://localhost/register&quot;&gt;Register&lt;/a&gt;
                                                            &lt;/div&gt;
            
            &lt;div class=&quot;content&quot;&gt;
                &lt;div class=&quot;title m-b-md&quot;&gt;
                    Laravel
                &lt;/div&gt;

                &lt;div class=&quot;links&quot;&gt;
                    &lt;a href=&quot;https://laravel.com/docs&quot;&gt;Docs&lt;/a&gt;
                    &lt;a href=&quot;https://laracasts.com&quot;&gt;Laracasts&lt;/a&gt;
                    &lt;a href=&quot;https://laravel-news.com&quot;&gt;News&lt;/a&gt;
                    &lt;a href=&quot;https://blog.laravel.com&quot;&gt;Blog&lt;/a&gt;
                    &lt;a href=&quot;https://nova.laravel.com&quot;&gt;Nova&lt;/a&gt;
                    &lt;a href=&quot;https://forge.laravel.com&quot;&gt;Forge&lt;/a&gt;
                    &lt;a href=&quot;https://vapor.laravel.com&quot;&gt;Vapor&lt;/a&gt;
                    &lt;a href=&quot;https://github.com/laravel/laravel&quot;&gt;GitHub&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;

 </code>
        </pre>
    <div id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="0"
      data-hasfiles=""
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>
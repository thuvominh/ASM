<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* search_book.html */
class __TwigTemplate_aff14050867af4d98f1907e0115cb472ad8aacfc53901de5971e378f668e1c49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_book.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_book.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <title>Search Book</title>
  <link
          rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\"
          integrity=\"sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==\"
          crossorigin=\"anonymous\"
          referrerpolicy=\"no-referrer\"
  />
  <link href=\"../assets/styles/app.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
        integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\"
        crossorigin=\"anonymous\">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      height: 100vh;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    body.hot {
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 1)),
      url(hot.png) no-repeat center/cover;
    }

    body.hot #weather {
      background-image: url(hot.png);
    }

    body.cold {
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 1)),
      url(cold.png) no-repeat center/cover;
    }

    body.cold #weather {
      background-image: url(cold.png);
    }

    #weather {
      min-width: 350px;
      height: 600px;
      background: no-repeat center/cover;
      text-align: center;
      padding: 30px 20px;
      border-radius: 10px;
      transition: 0.4s;
    }

    #weather input {
      padding: 10px 20px;
      background-color: rgba(255, 255, 255, 0.4);
      font-size: 19px;
      box-shadow: 0 5px 4px rgba(0, 0, 0, 0.2);
      border: none;
      outline: none;
      border-radius: 0px 15px 0 15px;
      margin-bottom: 40px;
      width: 100%;
      transition: 0.4s;
    }

    #weather input:focus {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 15px 0 15px 0;
    }

    #weather .content {
      color: white;
    }

    #weather .content .name {
      white-space: nowrap;
      font-size: 35px;
      text-shadow: 2px 2px rgba(0, 0, 0, 0.5);
    }

    #weather .content .time {
      font-size: 15px;
      margin: 6px 0;
    }

    #weather .content .temperature {
      font-size: 65px;
      text-shadow: 4px 4px rgba(0, 0, 0, 0.6);
      display: inline-block;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.4);
      border-radius: 15px;
      box-shadow: 2px 2px 0 2px rgba(0, 0, 0, 0.5);
      margin: 20px 0 30px;
      font-weight: 800;
    }

    #weather .content .short-desc {
      font-size: 40px;
      font-weight: 600;
      text-shadow: 3px 3px rgba(0, 0, 0, 0.4);
    }

    #weather .content .more-desc {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 40px;
    }

    #weather .content .more-desc > div {
      font-size: 16px;
      display: flex;
      flex-direction: column;
    }

    #weather .content .more-desc > div span {
      margin-top: 15px;
    }

  </style>
</head>
<body>
<nav class=\"navbar navbar-dark bg-dark sticky-top\">
  <span class=\"navbar-brand\">TANNAT Bookstore </span>
  <a href=\"http://127.0.0.1:8000/book\" class=\"navbar-brand\">
    Book list
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    Search Book by ID
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    Category list
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    Author
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    About Us
  </a>
</nav>
<div class=\"container book\">
  <input type=\"text\" placeholder=\"Search...\" class=\"input-search\" />
  <div class=\"row mt-3 mb-4\">
    <div class=\"col-md-8\">
      <h1 class=\"mt-4 mt-md-0 name\">
        <span class=\"title\"></span>
      </h1>
    </div>
    <div class=\"mt-4 p-4 bg-light short-desc\"> </div>
  </div>
</div>
<script >
  const input = document.querySelector('.input-search')

  function changeBookUI(book) {
    const title = document.querySelector('.name .title')
    const shortDesc = document.querySelector('.short-desc')
    const image = document.querySelector('.image')

    title.innerHTML = book.book_name
    shortDesc.innerHTML = book.description
  }

  input.addEventListener('keyup', (e) => {
    if (e.keyCode === 13) {
      getBook(e.target.value)
    }
  })

  async function getBook(input) {
    const url = `http://127.0.0.1:8000/api/books/\${input}`

    const res = await fetch(url)
    const book = await res.json()

    changeBookUI(book)
  }



</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search_book.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <title>Search Book</title>
  <link
          rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\"
          integrity=\"sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==\"
          crossorigin=\"anonymous\"
          referrerpolicy=\"no-referrer\"
  />
  <link href=\"../assets/styles/app.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
        integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\"
        crossorigin=\"anonymous\">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      height: 100vh;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    body.hot {
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 1)),
      url(hot.png) no-repeat center/cover;
    }

    body.hot #weather {
      background-image: url(hot.png);
    }

    body.cold {
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 1)),
      url(cold.png) no-repeat center/cover;
    }

    body.cold #weather {
      background-image: url(cold.png);
    }

    #weather {
      min-width: 350px;
      height: 600px;
      background: no-repeat center/cover;
      text-align: center;
      padding: 30px 20px;
      border-radius: 10px;
      transition: 0.4s;
    }

    #weather input {
      padding: 10px 20px;
      background-color: rgba(255, 255, 255, 0.4);
      font-size: 19px;
      box-shadow: 0 5px 4px rgba(0, 0, 0, 0.2);
      border: none;
      outline: none;
      border-radius: 0px 15px 0 15px;
      margin-bottom: 40px;
      width: 100%;
      transition: 0.4s;
    }

    #weather input:focus {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 15px 0 15px 0;
    }

    #weather .content {
      color: white;
    }

    #weather .content .name {
      white-space: nowrap;
      font-size: 35px;
      text-shadow: 2px 2px rgba(0, 0, 0, 0.5);
    }

    #weather .content .time {
      font-size: 15px;
      margin: 6px 0;
    }

    #weather .content .temperature {
      font-size: 65px;
      text-shadow: 4px 4px rgba(0, 0, 0, 0.6);
      display: inline-block;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.4);
      border-radius: 15px;
      box-shadow: 2px 2px 0 2px rgba(0, 0, 0, 0.5);
      margin: 20px 0 30px;
      font-weight: 800;
    }

    #weather .content .short-desc {
      font-size: 40px;
      font-weight: 600;
      text-shadow: 3px 3px rgba(0, 0, 0, 0.4);
    }

    #weather .content .more-desc {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 40px;
    }

    #weather .content .more-desc > div {
      font-size: 16px;
      display: flex;
      flex-direction: column;
    }

    #weather .content .more-desc > div span {
      margin-top: 15px;
    }

  </style>
</head>
<body>
<nav class=\"navbar navbar-dark bg-dark sticky-top\">
  <span class=\"navbar-brand\">TANNAT Bookstore </span>
  <a href=\"http://127.0.0.1:8000/book\" class=\"navbar-brand\">
    Book list
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    Search Book by ID
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    Category list
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    Author
  </a>
  <a href=\"#\" class=\"navbar-brand\">
    About Us
  </a>
</nav>
<div class=\"container book\">
  <input type=\"text\" placeholder=\"Search...\" class=\"input-search\" />
  <div class=\"row mt-3 mb-4\">
    <div class=\"col-md-8\">
      <h1 class=\"mt-4 mt-md-0 name\">
        <span class=\"title\"></span>
      </h1>
    </div>
    <div class=\"mt-4 p-4 bg-light short-desc\"> </div>
  </div>
</div>
<script >
  const input = document.querySelector('.input-search')

  function changeBookUI(book) {
    const title = document.querySelector('.name .title')
    const shortDesc = document.querySelector('.short-desc')
    const image = document.querySelector('.image')

    title.innerHTML = book.book_name
    shortDesc.innerHTML = book.description
  }

  input.addEventListener('keyup', (e) => {
    if (e.keyCode === 13) {
      getBook(e.target.value)
    }
  })

  async function getBook(input) {
    const url = `http://127.0.0.1:8000/api/books/\${input}`

    const res = await fetch(url)
    const book = await res.json()

    changeBookUI(book)
  }



</script>
</body>
</html>
", "search_book.html", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\search_book.html");
    }
}

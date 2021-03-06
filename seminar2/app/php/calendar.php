<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--Page title-->
        <title>Tasty recipes</title>
        <!--Reset style sheet-->
        <link rel = "stylesheet" type = "text/css" href = "../css/reset.css">
        <!--Default style sheet-->
        <link rel = "stylesheet" type = "text/css" href = "../css/mystyles.css">
    </head>

    <!--Navigation bar-->
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
            <li class="navbar-item active"><a class="navbar-link active" href="./calendar.php">Calendar</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./meatballs-recipe.php">Meatballs Recipe</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./pancakes-recipe.php">Pancakes Recipe</a></li>
            <li class="navbar-item-right"><a class="navbar-link" href="./login_form.php">User</a></li>
        </ul>

        <div class="textbody">
            <!--Title-->
            <h1>Calendar</h1>

            <div class="schedule">
                <div class="schedule-body">
                    <div class="schedule-headings">
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                        <div>Sun</div>
                    </div>
                    <div class="divTableRow">
                        <a href="pancakes-recipe.php">
                            <div class="divTableCell pancake-cell"><p>1</p></div>
                        </a>
                        <div class="divTableCell"><p>2</p></div>
                        <div class="divTableCell"><p>3</p></div>
                        <div class="divTableCell"><p>4</p></div>
                        <div class="divTableCell"><p>5</p></div>
                        <div class="divTableCell"><p>6</p></div>
                        <div class="divTableCell"><p>7</p></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell"><p>8</p></div>
                        <div class="divTableCell"><p>9</p></div>
                        <div class="divTableCell"><p>10</p></div>
                        <div class="divTableCell"><p>11</p></div>
                        <a href="meatballs-recipe.php">
                            <div class="divTableCell meatball-cell">12</div>
                        </a>
                        <div class="divTableCell"><p>13</p></div>
                        <div class="divTableCell"><p>14</p></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell"><p>15</p></div>
                        <div class="divTableCell"><p>16</p></div>
                        <div class="divTableCell"><p>17</p></div>
                        <div class="divTableCell"><p>18</p></div>
                        <div class="divTableCell"><p>19</p></div>
                        <div class="divTableCell"><p>20</p></div>
                        <div class="divTableCell"><p>21</p></div>
                    </div>                             
                    <div class="divTableRow">
                        <div class="divTableCell"><p>22</p></div>
                        <div class="divTableCell"><p>23</p></div>
                        <div class="divTableCell"><p>24</p></div>
                        <div class="divTableCell"><p>25</p></div>
                        <div class="divTableCell"><p>26</p></div>
                        <div class="divTableCell"><p>27</p></div>
                        <div class="divTableCell"><p>28</p></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell"><p>29</p></div>
                        <div class="divTableCell"><p>30</p></div>
                        <div class="divTableCell"><p>31</p></div>
                        <div class="divTableCell next-month"><p>1</p></div>
                        <div class="divTableCell next-month"><p>2</p></div>
                        <div class="divTableCell next-month"><p>3</p></div>
                        <div class="divTableCell next-month"><p>4</p></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


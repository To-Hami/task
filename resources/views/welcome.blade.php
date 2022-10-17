<h2>Welcome to task </h2>

<a href="{{route('allEmployees')}}">All Employees</a>
<br><br>
<a href="http://localhost:8000/employees/0">get Employee By Id First Employee</a>

<br><br><br>
    Primitive data types: The predefined data types provided by php language are known as primitive data types.
<br>
        Primitive data types are also known as in-built data types.
<br>

        There are types of primitive data types in php :
<br><br><br><br><br>
        /**********************************************************/
<br><br><br><br><br>
        1/String
        A string is a sequence of characters, like "Hello world!".
<br>
        <?php
        $x = "Hello world!";
        $y = 'Hello world!';

        ?>
<br><br><br><br><br>

        /*************************************************************/
<br><br><br><br><br>

        2/Integer
        An integer data type is a non-decimal number
<br>
        Rules for integers:
<br>
        An integer must have at least one digit
        An integer must not have a decimal point
        An integer can be either positive or negative
<br>
        <?php
        $x = 5985;
        var_dump($x);
        ?>
<br><br><br><br><br>
        /****************************************************************/
<br><br><br><br><br>
        3/ Float
        A float (floating point number) is a number with a decimal point or a number in exponential form.

        In the following example $x is a float. The PHP var_dump() function returns the data type and value:
<br>
        <?php
        $x = 10.365;
        var_dump($x);
        ?>
<br><br><br><br><br>
        /***************************************************************/
<br><br><br><br><br>
        4/Boolean
        A Boolean represents two possible states: TRUE or FALSE.
<br>
        $x = true;
        $y = false;
<br><br><br><br><br>
        /*****************************************************************/
<br><br><br><br><br>
        5/ NULL Value
        Null is a special data type which can have only one value: NULL.
        A variable of data type NULL is a variable that has no value assigned to it.
<br>
        <?php
        $x = "Hello world!";
        $x = null;
        var_dump($x);
        ?>
<br><br><br><br><br>
        ############################################################################################

<br><br><br><br><br>
        Non-primitive data types: The data types that are derived from primitive data types of the php language are
        known as non-primitive data types.
        It is also known as derived data types or reference data types.

<br>
        There are types of Non-primitive data types in php :

<br><br><br><br><br>
        /*****************************************************************************************/
<br><br><br><br><br>
        1/PHP Array
<br>
        An array stores multiple values in one single variable.

        In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
<br>
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
        ?>
<br><br><br><br><br>
        /****************************************************************************************/
<br><br><br><br><br>
        2/PHP Object
<br>
        Classes and objects are the two main aspects of object-oriented programming.

        A class is a template for objects, and an object is an instance of a class.

        When the individual objects are created, they inherit all the properties and behaviors from the class, but each
        object will have different values for the properties.
<br>
        <?php
        class Car
        {
            public $color;
            public $model;

            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model = $model;
            }

            public function message()
            {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar->message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar->message();
        ?>
<br><br><br><br><br>
        /**********************************************************************************************/
<br><br><br><br><br>
<br>
        HTTP verbs :
<br>
        methods to transfer data from the server or perform any operation on the server.
        The HTTP protocol supports the methods, e.g. GET, POST, PUT, DELETE, PATCH, HEAD

<br>
        we use GET when you need to access a resource and retrieve data, and you don't have to modify or alter the state
        of this data.
<br>
        use POST when you need to send some data to the server. Ex. from a form to save these data somewhere.
<br>
        use HEAD when you need to access a resource and retrieve just the Headers from the response, without any
        resource data.
<br>
        use PUT when you need to replace the state of some data already existing on that system.
<br>
        use DELETE when you need to delete a resource (relative to the URI you've sent) on that system.
<br><br><br><br><br>

        /************************************************************************************************/
<br><br><br><br><br>
        In the HTTP context, what is the main difference between GET and POST?
<br>
        GET request() Method: Data is being requested from a specific resource (through some API URL).
        Here in the example, a dummy API is used to demonstrate, how GET requests actually work.
<br>
        POST request() Method: Data is sent to be processed to a specific resource (through some API URL).
        Here in the example, a dummy API is used to demonstrate, how POST request actually works.
<br><br><br><br><br>

        /***********************************************************************************************/
<br><br><br><br><br>
        MVC
<br><br><br>
        The Model-View-Controller (MVC) is an architectural pattern that separates an application into three main
        logical components: the model, the view, and the controller.
        Each of these components are built to handle specific development aspects of an application.
        MVC is one of the most frequently used industry-standard web development framework to create scalable and
        extensible projects.
<br>
        MVC Components:
<br><br><br>
        Model
<br><br><br>
        The Model component corresponds to all the data-related logic that the user works with.
        This can represent either the data that is being transferred between the View and Controller components or any
        other business logic-related data.
        For example, a Customer object will retrieve the customer information from the database, manipulate it and
        update it data back to the database or use it to render data.

<br><br><br>
        View
<br><br><br>
        The View component is used for all the UI logic of the application.
        For example, the Customer view will include all the UI components such as text boxes, dropdowns, etc.
        that the final user interacts with.
<br><br><br>
        Controller
<br><br><br>
        Controllers act as an interface between Model and View components to process all the business logic and incoming
        requests,
<br>
        manipulate data using the Model component and interact with the Views to render the final output.
        For example, the Customer controller will handle all the interactions and inputs from the Customer View and
        update the database using the Customer Model.
        The same controller will be used to view the Customer data.




















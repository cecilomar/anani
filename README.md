Ananí
=====
Ananí is a generic API written in PHP. All you have to do to make it work for you is to write your own user defined functions in `functions.php`, and that's it. The API uses the URL to make it's own arguments. The first one is the name of the function. The second one is an argument for the function. If you add more, then is an array for that first argument. As of now, it does not call more than an argument per function. This API does not call PHP defined function by itself.

The name Ananí [*ana´ni*] means, *flower of the water* in the language of the Taino (American Indians of the Caribbean).

## Motivation
I couldn't find someting like this for a project I was thinking about doing. Also, I remembered that some years ago, I saw a friend spend many days creating an API from scratch for a client.

## API Reference
### Simple:
URL: `//API_URL/func_name`
```PHP
func_name();
```
### Argument:
URL: `//API_URL/func_name/argument`
```PHP
func_name($argument);
```
### Array Argument:
URL: `//API_URL/func_name/argument1/argument2/argument3`
```PHP
func_name(array(
    1 => "argument1",
    2 => "argument2",
    3 => "argument3",
    )
);```

## Tests
There is a test function included in `functions.php`. 

URL: `//API_URL/test/whatever/you/want/to/write`.
```json
{
    "1": "whatever",
    "2": "you",
    "3": "want",
    "4": "to",
    "5": "write",
    "custom": {
        "description": "This function just outputs whatever you put in the URL.",
        "generated": "Thu, 01 Jan 2015 12:12:12 -0000"
    }
}
```

## Contributors
So far, I've been writing all the code with the use of the PHP manual. Now,if you want to help me make this project better, you are more than welcome.

## License
[GNU General Public License v2 (GPL-2)](http://www.gnu.org/licenses/gpl-2.0.txt)

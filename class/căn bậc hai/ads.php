<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Căn bậc hai</title>
</head>

<body>
    <?php

class QuadraticEquation
{
    private $first;
    private $second;
    private $three;
    public function __construct($first, $second, $three)
    {
        $this->a = $first;
        $this->b = $second;
        $this->c = $three;
    }

    public function getDiscriminant()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }
    public function getRoot1()
    {
        return (-$this->b + sqrt($this->b * $this->b + 4 * $this->a * $this->c)) / (2 * $this->a);
    }
    public function getRoot2()
    {
        return (-$this->b - sqrt($this->b * $this->b + 4 * $this->a * $this->c)) / (2 * $this->a);
    }
    public function getBothRoot()
    {
        return (-$this->b / (2 * $this->a));
    }
}


?>
    
</body>

</html>
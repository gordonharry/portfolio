
class Counter {

    /**
     * @param array $parameters --- example: array('Word' => count)
     * @return string
     */
    public function fizzbuzz($parameters = []) {
        if (empty($parameters)) $parameters = $this->defaultFizzbuzzparameters();

        $output = '';
        for ($i = 1; $i <= 100; $i++) {
            $loopOutput = '';

            foreach ($parameters as $key => $parameter) {
                if ($i % $parameter == 0) {
                    $loopOutput .= $key;
                    continue;
                }
            }

            $loopOutput = $loopOutput == '' ? $i : $loopOutput;
            $output  .= nl2br($loopOutput . "\n");

        }

        return $output;
    }

    /**
     * @return array
     */
    public function defaultFizzbuzzParameters() {
        return $parameters = array(
            'Fizz' => 3,
            'Buzz' => 5,
        );
    }
}
$counter = new Counter();
echo $counter->fizzbuzz();

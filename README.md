# PHP Reflection vs Direct Method Call Benchmark

## Overview
This project benchmarks the performance difference between calling a method directly and using PHP's Reflection API to invoke the method dynamically.

## Features
- Compares execution time of direct method calls vs reflection method calls
- Uses a simple `Calculator` class with an `add` method
- Outputs the benchmark results in the terminal

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/reflection-vs-direct-call.git
   ```
2. Navigate to the project directory:
   ```sh
   cd reflection-vs-direct-call
   ```
3. Run the benchmark script:
   ```sh
   php benchmark.php
   ```

## Benchmark Results

Example output:
```
Calculate method: 0.05 seconds
With reflection: 0.21 seconds
```

This shows that using reflection is significantly slower than direct method calls.

## Why Reflection Is Slower
Reflection involves runtime type checking and additional function calls, making it inherently slower than direct method invocations. Use it only when dynamic method resolution is necessary.

For more information, you can read this article:
[Benchmarking Reflection vs Direct Method Calls in PHP](https://medium.com/@amirrezazare59/benchmarking-reflection-vs-direct-method-calls-in-php-440abe875e3d)

## License
This project is licensed under the MIT License.

## Contributions
Feel free to submit issues or pull requests to improve the benchmarking methods!


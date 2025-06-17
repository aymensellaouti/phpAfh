<?php

class Student
{
    /**
     * @param string $name
     * @param array $marks
     */
    public function __construct(
        /**
         * @var string the student name
         */
        private string $name,
        /**
         * @var int[] of marks
         */
        private array $marks = []
    )
    {}

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getMarks(): array
    {
        return $this->marks;
    }

    /**
     * @param array $marks
     */
    public function setMarks(array $marks): void
    {
        $this->marks = $marks;
    }

    /**
     * @return void
     */
    public function showMarks(): void {
        foreach ($this->marks as $mark) {
            echo $mark.PHP_EOL;
        }
    }

    /**
     * @return float
     */
    public function avg(): float {
        return array_sum($this->marks) / count($this->marks);
    }

    public function isAccepted(): bool {
        return $this->avg() >= 10;
    }
}
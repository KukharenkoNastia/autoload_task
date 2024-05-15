<?php /** @noinspection ALL */

namespace DockerTask;

use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger {
    private $logFile;
    private $output;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function log($level, $message, array $context = []): void {
        $formattedMessage = $this->formatMessage($level, $message, $context);
        $this->writeToOutput($formattedMessage);
    }

    public function info($message, array $context = []): void {
        $this->log('info', $message, $context);
    }

    public function warning($message, array $context = []): void {
        $this->log('warning', $message, $context);
    }

    public function error($message, array $context = []): void {
        $this->log('error', $message, $context);
    }

    public function debug($message, array $context = []): void {
        $this->log('debug', $message, $context);
    }

    public function setOutput($output) {
        $this->output = $output;
    }

    private function formatMessage($level, $message, $context) {
        $placeholders = [
            '{datetime}' => date('Y-m-d H:i:s'),
            '{level}' => strtoupper($level),
            '{message}' => $message
        ];
        foreach ($context as $key => $value) {
            $placeholders["{{$key}}"] = $value;
        }
        return implode(' ', $placeholders) . PHP_EOL;
    }

    private function writeToOutput($message) {
        if ($this->output === 'file') {
            file_put_contents($this->logFile, $message, FILE_APPEND);
        } elseif ($this->output === 'console') {
            echo $message;
        }
    }
}
<?php declare(strict_types=1);


class Context {

	private static $instance;
	private $path;

	public static function getInstance(): self {
		if (self::$instance === null) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function setPath(string $path): void {
		$this->path = $path;
	}

	public function getPath(): string {
		return $this->path;
	}

	public function getPage(): ?string {
		$pageFile =  __DIR__ . '/../includes/page/' . $this->path . '.php';
		return is_file($pageFile) ? $pageFile : null;
	}
}

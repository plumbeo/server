<?php declare(strict_types=1);
// SPDX-FileCopyrightText: 2022 Carl Schwan <carl@carlschwan.eu>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCP;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class allowing to inject services into your application. You should
 * use whenever possible dependency injections instead.
 *
 * ```php
 * use OCP\Server;
 *
 * $tagManager = Server::get(ITagManager::class);
 * ```
 */
final class Server {
	/**
	 * @template T
	 * @param class-string<T>|string
	 * @return T|mixed
	 * @throws ContainerExceptionInterface
	 * @throws NotFoundExceptionInterface
	 */
	static public function get(string $serviceName) {
		return \OC::$server->get($serviceName);
	}
}

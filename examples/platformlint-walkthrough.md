# Platformlint Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | rollout width | 116 | watch |
| stress | quota pressure | 166 | ship |
| edge | route drift | 229 | ship |
| recovery | secret scope | 205 | ship |
| stale | rollout width | 257 | ship |

Start with `stale` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around quota pressure and secret scope.

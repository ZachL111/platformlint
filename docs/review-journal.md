# Review Journal

I treated `platformlint` as a project where the smallest useful behavior should still be inspectable.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its platform engineering focus without claiming live deployment or external usage.

## Cases

- `baseline`: `rollout width`, score 116, lane `watch`
- `stress`: `quota pressure`, score 166, lane `ship`
- `edge`: `route drift`, score 229, lane `ship`
- `recovery`: `secret scope`, score 205, lane `ship`
- `stale`: `rollout width`, score 257, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.

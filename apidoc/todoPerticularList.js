/**
 * @api {post} /todo/{id}/perticular-list Perticular List activity
 * @apiName List Perticular activity
 * @apiGroup Todo
 *
 * @apiParam {Number} id Activity unique ID.
 *
 * @apiSuccessExample Success-Response
 *     HTTP/1.1 200 OK
 *     {
 *         [
 *               "task": "Buy BMW",
 *               "time": "17-01-20 01:59 PM"
 *         ]
 *     }
 *
 * @apiSuccessExample Validation-Error
 *     HTTP/1.1 422 OK
 *     {
 *      "task": "The task field is required".
 *      "time": "The task field is required".
 *     }
 *
 */